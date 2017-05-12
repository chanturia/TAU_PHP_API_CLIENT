## Clone the repo
#### generate keys
ssh-keygen -t rsa -b 4096 -C "xx@xxx.xxx"
set the name of key same as repo ie TAU_PHP_API_CLIENT_rsa
do not use passphrase
#### set deploy keys 
using setings->Deploy keys->Add deploy key 
paste the contents of TAU_PHP_API_CLIENT_rsa.pub
#### prepare andpoints
use .ssh/config like
```
#main
Host github.com-TAU_PHP_API_CLIENT
    IdentitiesOnly yes
    HostName github.com
    User YOURGITHUBUSERNAME
    IdentityFile /home/YOURUSERNAME/.ssh/TAU_PHP_API_CLIENT_rsa
```
#### clone
git clone git@github.com-TAU_PHP_API_CLIENT:vaspapa7/TAU_PHP_API_CLIENT.git
