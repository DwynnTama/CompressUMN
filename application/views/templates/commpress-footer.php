    <div class="footer">
        <div class="copyright">© COMMPRESS UMN 2021 | All Rights Reserved</div>
    </div>
    <script>
        function numcheck() {
            var form = document.getElementById("form-oprec");
            var nim = document.getElementById("inp-nim");
            var res = nim.value;

            if (res != '') {
                if (isNaN(res)) {

                    // Set input value empty 
                    nim.value = "";

                    // Reset the form 
                    form.reset();
                    return false;
                } else {
                    return true
                }
            }
        }
    </script>
</html>