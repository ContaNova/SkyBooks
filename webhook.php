<?php
$LOCAL_ROOT         = "/var/lib/tomcat7/webapps/ROOT";
$LOCAL_REPO_NAME    = "SkyBooks";
$LOCAL_REPO         = "{$/var/lib/tomcat7/webapps/ROOT}/{$SkyBooks}";
$REMOTE_REPO        = "git@github.com:Teawith/SkyBooks.git";
$BRANCH             = "master";
if ( $_POST['payload'] ) {
  // Only respond to POST requests from Github
  
  if( file_exists($LOCAL_REPO) ) {
    
    // If there is already a repo, just run a git pull to grab the latest changes
    shell_exec("cd {$LOCAL_REPO} && git pull");
    die("done " . mktime());
  } else {
    
    // If the repo does not exist, then clone it into the parent directory
    shell_exec("cd {$LOCAL_ROOT} && git clone {$REMOTE_REPO}");
    
    die("done " . mktime());
  }
}
?>