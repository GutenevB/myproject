<?php
/**
8. Сделайте класс-оболочку над $_SERVER. Класс должен иметь следующие
свойства: request_uri, ip, document_root, http_host, http_user_agent, query_string.
 */
var_dump($_SERVER);
echo "<hr>";

class Server
{
    public $request_uri;
    public $ip;
    public $document_root;
    public $http_host;
    public $http_user_agent;
    public $query_string;

    public function __construct ()
    {
        $this->request_uri     = $_SERVER['REQUEST_URI'];
        $this->ip              = $_SERVER['REMOTE_ADDR'];
        $this->document_root   = $_SERVER['DOCUMENT_ROOT'];
        $this->http_host       = $_SERVER['HTTP_HOST'];
        $this->http_user_agent = $_SERVER['HTTP_USER_AGENT'];
        $this->query_string    = $_SERVER['QUERY_STRING'];
    }

    public function GetRequestUri()
    {
        echo "<b>request_uri = </b> ";
        echo $this->request_uri;
    }
    public function GetIp()
    {
        echo "<br />". "<b>ip =  </b>";
        echo $this->ip;
    }
    public function GetDocumentRoot()
    {
        echo "<br />". "<b>document_root = </b> ";
        echo $this->document_root;
    }
    public function GetHttpHost()
    {
        echo "<br />". "<b>http_host =  </b>";
        echo $this->http_host;
    }
    public function GetHttpUserAgent()
    {
        echo "<br />". "<b>http_user_agent = </b> ";
        echo $this->http_user_agent;
    }
    public function GetQueryString()
    {
        echo "<br />". "<b>query_string = </b> ";
        echo $this->query_string;
    }

}

$server= new Server();
$server->GetRequestUri();
$server->GetIp();
$server->GetDocumentRoot();
$server->GetHttpHost();
$server->GetHttpUserAgent();
$server->GetQueryString();