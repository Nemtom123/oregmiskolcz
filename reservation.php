<script>
    function resizeIframe(obj) {
        obj.style.height = obj.contentWindow.document.body.scrollHeight + 'px';
    }
</script>
<iframe id="reserved" style="height:2800px;width:100%;  overflow:hidden; border: none; scroll-behavior: unset" scrolling="no" onload="resizeIframe(this)" src="reservation2.php"></iframe>


