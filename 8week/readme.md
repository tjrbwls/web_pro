#### 1. 동적 웹페이지와 정적 웹페이지의 차이를 설명하시오.
정적 웹페이지는 웹 서버에 이미 완성본으로 저장되어 있는 파일(html)을 전달하는 웹 페이지이며 한 요청에 관하여 모든 사용자가 같은 결과를 받고 사용자는 서버의 데이터가 변경되지 않는 한 고정된 웹페이지를 보게 되지만 동적 웹페이지는 서버에 있는 데이터를 스크립트에 의해 가공처리하여 만들어진 html 문서를 전달하는 웹 페이지이며 요청에 관하여 사용자는 조건에 따라 다른 결과를 받고 사용자는 상황, 시간, 요청 등에 따라 달라지는 웹 페이지를 보게 됩니다.

#### 2. PHP에 설치된 모듈(20개)은 어떤 것이 있는지 조사하시오.
PHP에 설치된 모듈은 bcmath, dba, filter, imap, mcrypt, pcntl, pdo_odbc, readline, snmp, sysvsem, xmlrpc, bz2, dom, ftp, interbase, mysqli, pcre, pdo_pgsql, recode, soap등이 있습니다.

#### 3. PHP에서 사용되는 스크립트 엔진에 대해 기술하시오.
PHP에서 사용되는 스크립트 엔진은 젠드엔진이며 젠드엔진은 매우 최적화된 모듈 백엔드로서 C로 개발되었으며 최초로 PHP 밖의 애플리케이션에 사용할 수 있었으며 젠드 엔진은 메모리 및 리소스 관리, 그리고 PHP 언어의 기타 표준 서비스를 제공합니다.

#### 4. 웹 브라우저에서 http://www.abc.com/abc.php 페이지를 접속했을 때, 서버는 어떠한 일을 수행하는가?
1. 브라우저가 www.abc.com/abc.php의 IP 주소를 찾기 위해 캐시에서 DNS 기록을 확인한다.
2. 만약 요청한 URL(www.abc.com/abc.php)이 캐시에 없다면, ISP의 DNS 서버가 DNS 쿼리로 www.abc.com/abc.php을 호스팅하는 서버의 IP 주소를 찾는다.
3. 브라우저가 해당 서버와 TCP 연결을 시작한다.
4. 브라우저가 웹서버에 HTTP 요청을 보낸다.
5. 서버가 요청을 처리하고 응답을 보낸다.
6. 서버가 HTTP 응답을 보낸다.
7. 브라우저가 HTML 컨텐츠를 보여준다.

#### 5. call by value와 call by reference의 차이점에 대해 기술하시오.
Call by value는 인자로 받은 값을 복사하여 처리를 하고 Call by reference는 인자로 받은 값의 주소를 참조하여 직접 값에 영향을 줍니다, 즉 값을 복사를 해서 처리하냐, 아니면 직접 참조를 하느냐의 차이입니다.

#### PHP문제 업로드 사이트

https://webprophp.imweb.me/?q=YToxOntzOjEyOiJrZXl3b3JkX3R5cGUiO3M6MzoiYWxsIjt9&page=1
