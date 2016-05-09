<footer>
<p>dimaz</p>
<p><?php echo $_SERVER['SERVER_NAME'];?></p>
<p><?php
echo "Last modified: " . date ("F d Y H:i:s.", getlastmod());
?>
</p>
<p><?php echo $_SERVER["DOCUMENT_ROOT"];?></p>
</footer>