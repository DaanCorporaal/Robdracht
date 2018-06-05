<html>
<head>
    <script  type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.debug.js" integrity="sha384-CchuzHs077vGtfhGYl9Qtc7Vx64rXBXdIAZIPbItbNyWIRTdG0oYAqki3Ry13Yzu" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../../functions/js/jquery.js"></script>
    <script type="text/javascript" src="../../functions/js/html2canvas.min.js"></script>

    <script type="text/javascript">
        function genPdf() {

            var doc = new jsPDF();
            var img;
            html2canvas(document.body, {
                onrendered: function(canvas) {
                    img = canvas.toDataURL("image/png");
                    doc.addImage(img , 'JPEG',20,20);
                    doc.save('a4.pdf')
                }
            });
        }
    </script>
</head>
<body>

    <button onclick="javascript:genPdf();" name="download pdf"> download pdf</button>

    <div id="printed_value">
        <h1>
            text
        </h1>
        <input type="text">
        <input type="submit"> lol
        <input type="password">
    </div>
</body>
</html>
