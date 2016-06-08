<html lang="de">

<head>
<?php 
ini_set( 'error_reporting', E_ALL );
ini_set( 'display_errors', true );
include("/var/www/src/php/head.php"); ?>
</head>
<body id="page-top" class="index">
<!--Nav-bar-->
<?php include("/var/www/src/php/navbar.php"); ?>
    <header>
        <div class="container">
            <div class="row">
            <h2><u>VPN</u></h2>
            </br>
            <div class="col-md-6">
              <p><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#start-vpn">Starte VPN</button>
              </p>
                                                <!-- Modal -->
                             <div id="start-vpn" class="modal fade" role="dialog">
                               <div class="modal-dialog">

                                   <!-- Modal content-->
                                 <div class="modal-content">
                                   <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title"><font color="#2c3e50">Starte VPN</font></h4>
                                   </div>
                                    <div class="modal-body">
                                        <div class="form-group has-success">
                                        <form action="/var/www/src/php/vpn.php" method="post" autocomplete="off" name="startvpncon">
                                         <label class="control-label" for="inputSuccess">Bitte best&aumltige die Aktion mit dem Passwort:</label>
                                         <input type="password" name="start_vpn" class="form-control" id="startvpn">
                                         <hr/>
                                         <button type="submit" value="submit" class="btn btn-success">Verbinden</button>
                                        </form>
                                        </div>
                                    </div>
                                   </div>

                                  </div>
                              </div>
            </div>
            <div class="col-md-6">
              <p><button type="submit" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#stop-vpn">Stoppe VPN</button>
              </p>
                                                <!-- Modal -->
                             <div id="stop-vpn" class="modal fade" role="dialog">
                               <div class="modal-dialog">

                                   <!-- Modal content-->
                                 <div class="modal-content">
                                   <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title"><font color="#2c3e50">Stoppe VPN</font></h4>
                                   </div>
                                    <div class="modal-body">
                                        <div class="form-group has-error">
                                        <form method="POST" action="/var/www/src/php/vpn.php" autocomplete="off" name="stopvpncon">
                                         <label class="control-label" for="inputError">Bitte best&aumltige die Aktion mit dem Passwort:</label>
                                         <input type="password" name="stop_vpn" class="form-control" id="stopvpn">
                                         <hr/>
                                         <button type="submit" value="submit" class="btn btn-error">Trennen</button>
                                         </form>
                                        </div>
                                    </div>
                                   </div>

                                  </div>
                              </div>
            </div>
                <div class="col-lg-12" id="webapp">
              <hr/>
                </br>
                </br>
                <h2><u>Web-apps</u></h2>
                </br>
                </br>
                    <div class="col-lg-12" id="cloud">
                    <br/>
                    <h3>Cloud</h3>
                    <br/>
                    <br/>
                     <a href="owncloud/index.php"><button type="submit" class="btn btn-primary btn-lg">öffnen</button></a>
                      <div class="col-lg-12">
                      <br/>
                      <p>Cloud-server</p>
                      <br/>
                                      <div class="col-lg-12">
                                       <img src="src/img/cloud.png" class="img-responsive center-block" alt="" height="200px" width="500px" border="2"> 
                                         </a>
                                       </br>
                                       </div>

                      </div>
                    </div>
                    <div class="col-lg-12" id="files">
                                 <hr/>
                                 </br>
                    <h3>File-Sharing</h3>
                    <br/>
                    <br/>
                     <a href="http://192.168.178.54:8889"><button type="submit" class="btn btn-primary btn-lg">öffnen</button></a>
                     <div class="col-lg-12">
                     <br/>
                      <p>Bit-Torrent Sync</p>
                      <br/>
                                        <div class="col-lg-12">
                                       <img src="src/img/btsync.png" class="img-responsive center-block" alt="" height="200px" width="500px" border="2">
                                         </a>
                                       </br>
                                       </div>

                      </div>
                    </div>
                    <div class="col-lg-12" id="foto">
                              <hr/>
                              </br>
                    <h3>Fotos</h3>
                    <br/>
                    <br/>
                     <a href="Lychee/index.html"><button type="submit" class="btn btn-primary btn-lg">öffnen</button></a>
                      <div class="col-lg-12">
                      <br/>
                      <p>Web-Foto App</p>
                      </br>
                                         <div class="col-lg-12">
                                       <img src="src/img/foto.png" class="img-responsive center-block" alt="" height="200px" width="500px" border="2">
                                         </a>
                                       </br>
                                       </div>
                      </div>
                    </div>
                    <div class="col-lg-12" id="torrent">
                                 <hr/>
                                 </br>
                    <h3>Torrents</h3>
                    <br/>
                    <br/>
                     <a href="http://dunno.ddns.net:9091"><button type="submit" class="btn btn-primary btn-lg">öffnen</button></a>
                     <div class="col-lg-12">
                     <br/>
                      <p>Remote Transmission</p>
                      <br/>
                                        <div class="col-lg-12">
                                       <img src="src/img/torrent.png" class="img-responsive center-block" alt="" height="200px" width="500px" border="2">
                                         </a>
                                       </br>
                                       </div>

                        </div>
                      </div>
                    </div>
                </div>
        </div>
    </header>
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                </div>
            </div>
        </div>
        <div id="end" class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright © Manuel 2015 - 2016
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll visible-xs visible-sm">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

   </body>
   <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-68546575-1', 'auto');
  ga('send', 'pageview');

</script>

    <script src="src/js/jquery.js"></script>

    <script src="src/js/bootstrap.min.js"></script>
    <script src="src/js/cbpAnimatedHeader.js"></script>

    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="src/js/classie.js"></script>

    <script src="src/js/jqBootstrapValidation.js"></script>
    <script src="src/js/contact_me.js"></script>

    <script src="src/js/freelancer.js"></script>

</html>




<?php 
ini_set( 'error_reporting', E_ALL );
ini_set( 'display_errors', true );
include("/var/www/src/php/vpn.php"); ?>
