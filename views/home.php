 <html>
    <head>
        <meta charset="utf-8"/>
        <title>
            Life Logger
        </title>
        <meta name="description" content=""/>
        <!-- Mobile -->
        <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1.0, user-scalable=yes"/>
        <!-- Chrome / Android -->
        <meta name="mobile-web-app-capable" content="yes"/>
        <meta name="theme-color" content="black"/>
        <link rel="icon" href="icon.png"/>
        <!-- Safari / iOS -->
        <meta name="apple-mobile-web-app-capable" content="yes"/>
        <meta name="apple-mobile-web-app-status-bar-style" content="black"/>
        <link rel="apple-touch-icon-precomposed" href="apple-touch-icon.png"/>
        <!-- Scripts -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js">
        </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous">
        </script>
        <script src="scripts/custom.js">
        </script>
        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous"/>
        <link rel="stylesheet" type="text/css" href="styles/styles.css"/>
    </head>
    <body unresolved>


<h1>
            Life Logger
        </h1>
        <h2>
            Categories
        </h2>
        <form action="data/addActivity.php" method="post">
            <fieldset class="form-group">
                <label>
                    Category
                </label>
                <select id="selectCategory" name="category">
                    <option>
                        Select category
                    </option>
                </select>
            </fieldset>
            <fieldset class="form-group">
                <label>
                    Activity
                </label>
                <select id="selectActivity" name="activity">
                    <option>
                        Select activity
                    </option>
                </select>
            </fieldset>
            <button type="submit" class="btn btn-secondary">
                Add Activity
            </button>
        </form>
        <h2>Your Recent Activity</h2>
        <div id="recentActivities"></div>

               
    </body>
</html>