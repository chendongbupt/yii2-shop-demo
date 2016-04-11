### Git

1. 远程仓库建立， 第三方服务 `github`   `coding.net`， 一般公有仓库对所有人可见可下载， 私有能权限控制
2. 采用ssh连接，绑定了机器， 不用每次都密码验证。
   1. 本地设置自己的信息  git config --global user.name | user.email 
   2. 客户端生成 ssh key `ssh-keygen -t rsa -C "my first ssh-key"`  文件 .ssh/id_rsa.pub
   3. 服务端添加 公有rsa key
3. 从远程仓库clone  `git clone git@git.coding.net:chendongbupt/Demo.git`， 默认为master分支， 具体某个分支则可以 添加 " -b branch_name "
4. 本地操作 
    * 添加文件 git add [file]，对文件追踪，已经加入了本地暂存区
    * 将暂存区的所有文件提交到本地仓库 git commit -m "说明"
    * git status 可以随时看文件状态
    * 工作区撤销 git checkout -- [file]  
      * 一种是readme.txt自修改后还没有被放到暂存区，现在，撤销修改就回到和版本库一模一样的状态；

      * 一种是readme.txt已经添加到暂存区后，又作了修改，现在，撤销修改就回到添加到暂存区后的状态。
     
	* 暂存区 撤销  git reset HEAD file
	* git rm [file] 删除， git checkout -- [file]， 还原为本地仓库的最新版本
	* git log 查看版本记录
	* git reset --hard [commit_id] 回退到版本号, commit_id 可以是具体的某个版本， 也可以用HEAD表示， HEAD指向当前版本， HEAD^表示上一个版本， HEAD~n：n个版本前
5. 提交到远程仓库 git push， 按照提示进行
6. 本地更新 git pull, 会自动下载 git fetch和 git merge


#### 冲突

    <<<<<<< HEAD
    Creating a new branch is quick & simple.
    =======
     a new branch is quick AND simple.
    >>>>>>> feature1

冲突的位置会标记， 改了后 再进行提交

#### 分支与工作流
##### 分支指令
	查看分支：git branch

	创建分支：git branch <name>
	
	切换分支：git checkout <name>
	
	创建+切换分支：git checkout -b <name>
	
	合并某分支到当前分支：git merge <name>
	
	删除分支：git branch -d <name>

##### git flow
####### SVN
都用 master主分支， 修改->提交[->解决冲突->提交==]
####### feature branch
master主分支用于维护， dev为开发分支， 对于新功能， 新建分支 dev/feature， 提交后合并到dev，并测试。测试通过后，可以打上tag，要上这个新功能，则合并到master分支上

* tag 记录开发节点
* 命令git tag <name>用于新建一个标签，默认为HEAD，也可以指定一个commit id；
* git show 具体某个标签
* git tag 可以查看所有标签。

更多可以参考 <https://github.com/xirong/my-git/blob/master/git-workflow-tutorial.md>

#### 工具
命令行 git for windows
可视化 smartGit tortoiseGit SourceTree

#### 指令图
![](git.jpg)
