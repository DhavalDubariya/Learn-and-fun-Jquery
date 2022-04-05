# File Permissions


## Commands:-

-  sudo useradd <username>                  :- Add useradd.
-  sudo passwd <username>                   :- Add password to user.
-  sudo chown <username> <filename>        :- Change user of file.
-  cat /etc/passwd                         :- To find users.
-  cat /etc/group                          :- To find group.
-  sudo chgrp <groupname> <filename>       :- Change Group Name.
-  sudo usermod -aG <group> <username>     :- Add user to group.
-  sudo chmod u=rwx <filename>             :- Change Permissions of file.
-  sudo gpasswd -d <username> <groupname>  :- Delete user from group.
-  sudo groupdel <groupname>               :- Delete Group
-  sudo userdel <username>                 :- Delete User

## Read , Write ,Execute :-

-  r = 4
-  w = 2
-  x = 1

-   "-" :- To remove Permissions for user
-   "+" :- To add Permissions for user
-   "=" :- Add Permissions.
