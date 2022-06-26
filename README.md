<h3>List Acccount Demo</h3>
<table>
    <thead>
        <tr>
            <th>Email</th>
            <th>Password</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>owner@venpile.com</td>
            <td>owner123</td>
        </tr>
        <tr>
            <td>johndoe@venpile.com</td>
            <td>staff123</td>
        </tr>
    </tbody>
</table>

<br>

<h3>Steps To Use Venpile:</h3>
<ol>
    <li>Git Clone https://github.com/azizahelvia/venpile-app.git or download as zip and extract from zip.</li>
    <li>At the terminal type the command "composer install"</li>
    <li>Then, type the command "php artisan key:generate"</li>
    <li>Then, type NPM Install && NPM Run Dev</li>
    <li>Create a new database with the same name in the .env file in the DB_DATABASE section</li>
    <li>Type the command "php artisan migrate --Seed"</li>
    <li>Finally to run the application use the command "php artisan serve" </li>
</ol>
