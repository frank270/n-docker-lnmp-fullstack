# 初始化N-LNMP-Docker V0.1 <Windows 10 pro版> #
* 先完成wsl2, docker的安裝
* 下載phpmyadmin
* composer slim4
* cd src/slim4
* composer create-project slim/slim-skeleton:dev-master .
# 安裝mkcert
* https://github.com/FiloSottile/mkcert
```mkcert -install```

# 在wsl2中 #

```shell
cd [project folder]
cd cert
openssl dhparam -out dhparam.pem 4096
mkcert ndev.local
mkcert ndba.local
```

# 初始化N-LNMP-Docker V0.1 <mac版> #


* 下載phpmyadmin, 解壓在 3rd-party/dba
# 如果你要裝新的slim請自行重裝 #
* cd src/backend/slim4
* composer create-project slim/slim-skeleton:dev-master .
# 安裝mkcert #
* https://github.com/FiloSottile/mkcert
  
```mkcert -install```
```shell
cd [project folder]
cd cert
openssl dhparam -out dhparam.pem 4096
mkcert ndev.local
mkcert ndba.local
```
* 編輯/etc/hosts檔案
```
127.0.0.1 ndev.local
127.0.0.1 ndba.local
```