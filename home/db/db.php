<?php
class mysqlDb{
    private $mysql_server = 'localhost';
    private $mysql_username = 'root';
    private $mysql_pwd = 'root';
    private $mysql_db = 'demo';
    private $con ;
    
    //构造函数，当实例化这个类的时候调用
    public function __construct(){
        //链接数据库
        $this->con = mysql_connect($this->mysql_server,$this->mysql_username,$this->mysql_pwd) ;
        mysql_selectdb($this->mysql_db);//设置数据库
        mysql_set_charset('utf8');//设置字符集编码
    }
    //获取一条数据
    public function getOne($table,$file,$where=array()){
        if(!is_array($where)){
            return false;
        }
        $str = '';
        if(count($where)){
            //循环拼接
            foreach ($where as $k=>$v){
                
                if(is_array($v)){
                    $str .= $k." $v[0] '".$v[1]."' and ";
                }else{
                    $str .= $k."='".$v."' and ";
                }
            }
          
            $str = rtrim($str,'and ');//截取前后and
           
            $str = "where ".$str;
        }
        $sql = "select $file from $table $str";
        $res = mysql_query($sql);
        return mysql_fetch_assoc($res);
    }
    
    //获取多条数据
    public function getAll($table,$file,$where=array()){
        if(!is_array($where)){
            return false;
        }
        $str = '';
        if(count($where)){
            //循环拼接
            foreach ($where as $k=>$v){
                if(is_array($v)){
                    $str .= $k." $v[0] '".$v[1]."' and ";
                }else{
                    $str .= $k."='".$v."' and ";
                }
            }
          
            $str = rtrim($str,'and ');//截取前后and
           
            $str = "where ".$str;
        }
        
        
        $sql = "select $file from $table $str";
       // var_dump($sql);die();
        $res = mysql_query($sql);
        $data = array();
        while($row = mysql_fetch_assoc($res)){
            $data[] = $row;
        }
        return $data;
    }
    
    //修改
    public function update($table,$data,$where){
        if(!is_array($where) || !is_array($data)){
            return false;
        }
        //'update user set name='',sex='' where '
        $str = '';
        foreach ($data as $k=>$v){
            $str .= $k."='".$v."',";
        }
        $str = rtrim($str,',');
        
        $str_wher = '';
        //循环拼接
        foreach ($where as $k=>$v){
            $str_wher .= $k."='".$v."' and ";
        }
        
        $str_wher = rtrim($str_wher,'and ');//截取前后and
        
        $sql = "update $table set $str where $str_wher";
        mysql_query($sql,$this->con);
        
        return mysql_affected_rows();//受影响的行数
    }
    
    //添加
    public function insert($table,$data){
        //insert into users(name,sex,staus) values('','',)
        if(!is_array($data)){
            return false;
        }
        $str_key ='';
        $str_val = '';
        foreach ($data as $k=>$v){
            $str_key .= $k.',';
            $str_val .= "'".$v."',";
        }
        
        //截取字符串
        $str_key = rtrim($str_key,',');
        $str_val = rtrim($str_val,',');
        
        $sql = "insert into $table($str_key) values($str_val)";
        mysql_query($sql);
        return mysql_insert_id();//返回新添加的id
    }
    
    //删除
    public function delete($table,$where){
        if(!is_array($where)){
           return false; 
        }
        //"delete from users where id=7 and name='' "
        $str = '';
        //循环拼接
        foreach ($where as $k=>$v){
            $str .= $k."='".$v."' and ";
        }
        
        $str = rtrim($str,'and ');//截取前后and 
        
        $sql = "delete from $table where $str";//拼接成sql
        
        mysql_query($sql,$this->con);
        
        return mysql_affected_rows();//受影响的行数
    }
    
    /**
     * 
     * @param  $page
     * @param  $size
     * @param  $where array
     * 
     */
    public function getPage($page,$size,$where = array(),$table,$file){
        $data = $this->getAll($table,$file,$where);
        $count = count($data);//总条数
        
        if(!is_array($where)){
            return false;
        }
        $str = '';
        if(count($where)){
             //循环拼接
            foreach ($where as $k=>$v){
                
                if(is_array($v)){
                    $str .= $k." $v[0] '".$v[1]."' and ";
                }else{
                    $str .= $k."='".$v."' and ";
                }
            }
          
            $str = rtrim($str,'and ');//截取前后and
           
            $str = "where ".$str;
        }
        
        $start = ($page-1)*$size;//从哪个开始
        $sql = "select $file from $table $str  limit $start,$size";
        
        $res = mysql_query($sql);
        $data = array();
        while($row = mysql_fetch_assoc($res)){
            $data[] = $row;
        }
        
        return array('count'=>$count,'data'=>$data,'page'=>$page);
    }
    
    
    public function __destruct(){
        mysql_close($this->con);//关掉数据库
    }
}
