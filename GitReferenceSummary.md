##############################
`
git fetch origin  
get merge origin/feature  

git push origin feature  

git checkout master  
git merge feature  
git push origin master  
``
##############################

远程的都要加origin.使用这种形式访问origin/feature   本地直接写feature(branch)  
早上到公司  
`git fetch origin`  
看差异
`git diff feature origin/feature`  
`git merge origin/feature`  
// coding
走之前
`git push origin feature`  

##############################

`git add // 缓存`  
`git commit -m “” // 快照`  

##############################
`
touch file  
git status -s   

git add .  
git status -s   

// git reset HEAD  

vim file  

git status -s   
git status  
`

/*
#####git add 添加文件到缓存  

#####git status 查看你的文件在工作目录与缓存的状态

#####git diff #尚未缓存的改动
- **如果没有其他参数，git diff 会以规范化的 diff 格式（一个补丁）显示自从你上次提交快照之后尚未缓存的所有更改  

- **git status显示你上次提交更新至后所更改或者写入缓存的改动，而 git diff 一行一行地显示这些改动具体是啥。 
- **通常执行完 git status 之后接着跑一下 git diff 是个好习惯。

#####git diff --cached #查看已缓存的改动

#####git diff HEAD 查看已缓存的与未缓存的所有改动

#####git diff --stat 显示摘要而非整个 diff


*/




































