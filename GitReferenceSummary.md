##############################
```
git fetch origin  
get merge origin/feature  

git push origin feature  

git checkout master  
git merge feature  
git push origin master  
```
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

远程的都要加origin.使用这种形式访问origin/feature   本地直接写feature(branch)  
早上到公司  
`git fetch origin`  
看差异  
`git diff feature origin/feature`  
`git merge origin/feature`  
// coding
走之前  
`git push origin feature`  

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

`git add // 缓存`  
`git commit -m “” // 快照`  

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
## 基本快照  
####git add 添加文件到缓存    
####git status 查看你的文件在工作目录与缓存的状态  
####git diff 尚未缓存的改动  
- *如果没有其他参数，git diff 会以规范化的 diff 格式（一个补丁）显示自从你上次提交快照之后尚未缓存的所有更改*  

- *git status显示你上次提交更新至后所更改或者写入缓存的改动，而 git diff 一行一行地显示这些改动具体是啥。* 
- *通常执行完 git status 之后接着跑一下 git diff 是个好习惯。*

####git diff --cached 查看已缓存的改动  
####git diff HEAD 查看已缓存的与未缓存的所有改动  
####git diff --stat 显示摘要而非整个 diff  
####git commit 记录缓存内容的快照  
####git commit -a 自动将在提交前将已记录、修改的文件放入缓存区
####git reset HEAD 取消缓存已缓存的内容
- *`git reset HEAD -- file` —— 它用来告诉 Git 这时你已经不再列选项，剩下的是文件路径了*  
- *执行 git reset HEAD 以取消之前 git add 添加，但不希望包含在下一提交快照中的缓存*    
####git rm 将文件从缓存区移除  
- *`git mv git rm --cached orig; mv orig new; git add new`*  

**示例代码：**
```
touch file   
git status -s    

git add .    
git status -s     

// git reset HEAD  

vim file    

git status -s   
git status

git diff 
git diff --cached
git diff HEAD  

git config --global user.name "atcuan"
git config --global user.email "atcuan@gmail.com"

git add file
git commit -m "commit file"
git status
git status -s


vim file
git status -s
git commit -m "change file"
git commit -am "change file"


vim hello
vim bbbb
git add .
git commit -m ""
vim bbbb
git status -s

git add .
git status -s

git reset HEAD --bbbb
git status -s



```




































