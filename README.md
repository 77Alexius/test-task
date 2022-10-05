# test-task
<h1>Installation instructions</h1>
<ol>
<li>Install server package with PHP version 8+ (for example, <a href="https://www.apachefriends.org/index.html">XAMPP</a>)</li>
<li>Download the project and copy the folder <b>test-task-main</b> to the <i>htdocs</i> folder (or any else your local web-server is using to host websites)</li>
<li>Install <a href="https://getcomposer.org/download/">Composer</a></li>
<li>Since the project is using the NodeJS modules, install <a href="https://nodejs.org/en/download/">NodeJS</a></li>
<li>Open the command tool and change directory to the unpacked <b>test-task-main</b> folder, run the command: <i>composer install</i>
<li>Run the command <i>yarn install</i> and then <i>yarn watch</i> to build assets</li>
<li>Stop running the batch script by pressing Ctrl+C (if you're using Windows)</li>
<li>run the command <i>symfony server:start</i> to start the built-in symfony web-server</li>
<li>open <a href="http://127.0.0.1:8000">http://127.0.0.1:8000</a> in your browser</li>
</ol>
