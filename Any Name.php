//for new project:
open git bash first 

type:

git init (this is usually the first command you'll run in a new project.)
git remote add yourvariableforrepository pasteherethelinkfromgithub
git add .
git commit -a -m "Your comment Here"
git log 

git push -u yourvariableforrepository master

//when created/ added a new file you should do:

git add
git commit -a -m "your comment Here"
git push -u yourvariableforrepository branchOrMaster

//to know the variable name of your repository:
git remote -v

//To change directory
git checkout directoryName