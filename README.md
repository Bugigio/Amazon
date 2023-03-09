# Amazon
Recreating an e-commerce similar to amazon. We are two students in the last year of high school so don't expect too much (css is stressful btw).

Team duo: Lorenzo Barattin (AKA LolloBara), Gabriele Tommasi (AKA Bugigio).

We are italian so the website will be in italian. In the future maybe we will try to translate every file in english (except for xml files).

# PHP Pages
Going into the folder "Pagine web" you will find all the php pages that were created in this project (also one file JS):
- account.php: is the page were you can see your orders, cancel them and recharge your credit;
- annullaOrdine.php: it's a page where there is only PHP to cancel an order;
- autenticazione.php: it's a page of only php to authenticate the user after submitting the inputs in the login.php page;
- cambiaPassword.php: it's a page where you can change the password of your account;
- cambiare.php: it has only php to change the password;
- login.php: it speaks for itself, it allows you to login in the account.php page;
- registrati.php: it allows you to register a new account;
- registrazione.php: only the php code to create a new file XML for the new account you just created and add a new account in the utenti.xml file;
- in the JS folder you will find a file "shop.js": it only allows the user to select how much products he wants to buy;
- "shop" folder contains all the pages for each category of products and also the page ordina.php:
  - (film, libri, sport, tecnologia, vestiti).php: they have se same code to display different products from magazzino.xml and here you can buy the products;
  - ordina.php: php code to order the products that you buy (only in the page that you are at the moment);

As you can see there is non shopping cart because we thought it in another and simplified way.

# CSS Pages
Going into the folder "Stili" you will find all the css pages we created for the relative PHP pages:
- account.css: linked to account.php;
- cambiaPassword.css: linked to cambiaPassword.php;
- shop.css: linked to (film, libri, sport, tecnologia, vestiti).php;
- styleLogin.css: linked to login.php;
- styleRegistrati: linked to registrati.php;

You may notice that these css are similar to each other except for the shop.css and account.css ones. In fact we asked chat GPT for help and then we modified some colors and other things.

# XML Pages
Going into the folder "XML" you may find all the XML files that makes this "website" working, making it similar to databases.
We wrote this files dinamically with PHP functions thanks to the family DOMDocument() functions.
We received an input in this project. In fact login.php, registrati.php, registrazione.php were given by our professor, but they were missing functions to create a new XML files each times someone new register a new account. We can say we created half of each of those files. Below there are the XML ones:
- magazzino.xml: it is the main file where we put the products;
- utenti.xml: main file where we put the essential information about every user (username, password);
- inside the forlder "utenti":
  -  "username".xml: username is between " because the name change based on the name of the specific user;

# XSD Pages
For who doesn't know what a XSD file is, we can say it is like a list of rules of formatting for the XML file that it is linked to.
In this case, they have to be linked dinamically to the files because by default, in the opening tag of XML, we put the link to the XSD file. Here, where we create XML files like a furnace, we do it dinamically thanks to the function "schemaValidate()" in the PHP language. Here it is the list of XSD files that you find in the "XSD" folder:
- magazzino.xsd: linked to magazzino.xml;
- username.xsd: linked to each "username".xml document;
- utenti.xsd: linked to utenti.xml;

# Other info
To complete there is a file .drawio (readable by the website https://www.draw.io) that allows you to understand how each page works. <br>
Email to contact us:
- Gabriele: gabriele.tommasi@antonioscarpa.edu.it;
- Lorenzo: lorenzo.barattin@antonioscarpa.edu.it;

After september 2023 these two emails will be deleted.
