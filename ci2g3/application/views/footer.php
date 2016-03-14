 </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="<?php print base_url(); ?>js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php print base_url(); ?>js/bootstrap.min.js"></script>
    <script type="text/javascript">
    var baseUrl="<?php print base_url(); ?>";    
    $(document).ready(function(){
        $('#ajaxLink').click(function(e){
           e.preventDefault();
           var postPodaci={ime:"Marko",godine:35};
    $.post(baseUrl+'Post/ajaxTest',postPodaci,function(podaci){
             alert(JSON.stringify(podaci));
         });  
        });
        
    });
    </script>
</body>

</html>