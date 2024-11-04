# Setting Up a PHP Project with XAMPP

## Step 1: Install XAMPP
1. Download XAMPP from the [Apache Friends website](https://www.apachefriends.org/index.html).
2. Install XAMPP by following the installation instructions for your operating system.

## Step 2: Start Apache Server in XAMPP
1. Open the XAMPP Control Panel. You’ll see options for starting different services.
2. Start Apache (this is the web server) by clicking the "Start" button next to Apache.
3. (Optional) If you plan to use MySQL databases, you can also start MySQL.
4. When Apache starts successfully, you’ll see a green indicator next to it.

## Step 3: Set Up Your Project Folder in XAMPP
1. Navigate to the `htdocs` folder in your XAMPP installation directory:
   - **Windows**: `C:\xampp\htdocs`
   - **macOS**: `/Applications/XAMPP/htdocs`

2. Create a New Folder in `htdocs` for your project:
   - Name the folder 'university-login`.
   - This folder will act as the root for your project.

3. Add the PHP Files:
   - Copy all of your files (`index.php`, `login.php`, `dashboard.php`, `logout.php`) into this folder.
   - 
## Step 4: Accessing Project in Browser
1. Open a web browser (Chrome, Firefox, etc.).
2. Navigate to `http://localhost/university-login`:
- Type `http://localhost/university-login` in the browser’s address bar and hit Enter.
- This should load `index.php`, which is the main entry point of your project.

