<?php 
switch($_SERVER['REDIRECT_URL']) {
    case '/really_old_page.php':
        header('HTTP/1.1 301 Moved Permanently');
        header('Location: /new-url/...');
    /*  As suggested in the comment, exit here.
        Additional output might not be handled well and
        provokes undefined behavior. */
        exit;
    default:
        header('HTTP/1.1 404 Not Found');
        die('404 - Not Found');
}
?>

<?php include("header.php"); ?>

<div class="page-container col-12 xs-md:p-0 plr">
    <!-- BEGIN MAIN CONTENT -->
    <section class="col-12 container grid ">
        <main class="col-12 relative mb ">
            <div class="container grid bg-white ">
                <div class="col-12 article__content">
                    <section class="container grid">
                        <article class=" xs-lg:mt-0 mt-md col-12">
                            <h1>Error</h1>
                            <p>
                            Unexpected error, return to <a href="/">home</a>.
                            </p>
                        </article>
                    </section>
                </div>
            </div>
        </main>
    </section>
    <!-- EINDE MAIN CONTENT -->
</div>

<?php include("footer.php"); ?>