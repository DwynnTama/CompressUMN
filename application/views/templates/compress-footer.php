    <div class="footer">
        <div class="copyright">© Commpress UMN 2020 | All Rights Reserved</div>
    </div>
    <script>
        function onlynum() {
            var fm = document.getElementById("form1");
            var ip = document.getElementById("num");
            var res = ip.value;

            if (res != '') {
                if (isNaN(res)) {

                    // Set input value empty 
                    ip.value = "";

                    // Reset the form 
                    fm.reset();
                    return false;
                } else {
                    return true
                }
            }
        }
    </script>

    </html>