<!--Charlotte Porter - 215229495 -->
<html>
    <head>
        <title></title>
        <meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
        <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
        <link rel="stylesheet" type="text/css" href="styling.css">
    </head>
    <body>
        <!-- Below is PHP code that is used to get the user input and 
        write it to reviews.xml
        -->
        <?php
        if (isset($_REQUEST['ok'])) {
            $xml = new DOMDocument("1.0", "UFT-8");
            $xml->load("reviews.xml");



            $rootTag = $xml->getElementsByTagName("root")->item(0);

            $dataTag = $xml->createElement("data");

            $aTag = $xml->createElement("name", $_REQUEST['name']);
            $bTag = $xml->createElement("email", $_REQUEST['email']);
            $cTag = $xml->createElement("comment", $_REQUEST['comment']);

            $dataTag->appendChild($aTag);
            $dataTag->appendChild($bTag);
            $dataTag->appendChild($cTag);

            $rootTag->appendChild($dataTag);

            $xml->save("reviews.xml");
        }
        ?>

        <div data-role="page" id="fb">
            <div data-role="header">
                <h1>Feedback</h1>
                <!-- Link to the homepage -->
                <a href="#home" class="ui-btn ui-btn-b ui-corner-all 
                   ui-shadow ui-icon-home ui-btn-icon-left">Home</a>
            </div><!-- /header -->

            <!-- Start of the main content -->
            <div role="main" class="ui-content">
               <!-- HTML form that links to PHP code -->
                <form action="feedBack.php" method="post">
                    <input type="text" name="name" placeholder="Full name"/>
                    <input type="email" name="email" placeholder="Email address"/>
                    <input type="text" name="comment" placeholder="Comments..."/>
                    <input type="submit" name="ok" value="add"/>

                </form>
            </div><!-- /content -->

            <div data-role="footer">
                <h4></h4>
            </div><!-- /footer -->
        </div><!-- /page -->

    </body>




