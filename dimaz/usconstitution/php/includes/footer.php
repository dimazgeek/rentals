<footer role="contentinfo">
<p>This version of the United States Constitution was adapted from <a href="http://www.house.gov/">U.S. House of Representatives</a> website.  <a href="http://www.archives.gov/exhibits/charters/constitution.html">Learn more about the United States Constitution at <strong>The National Archives</strong> online exhibit</a>.</p>
<p><?php echo $_SERVER['SERVER_NAME'];?></p>
<p><?php
echo "Last modified: " . date ("F d Y H:i:s.", getlastmod());
?>
</p>
<p><?php echo $_SERVER["DOCUMENT_ROOT"];?></p>
</footer>