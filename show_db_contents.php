<?php
$conn = mysqli_connect("partygoer.mysql.database.azure.com","matthewmartinez","1qaz2wsx!QAZ@WSX","z_url_set_1");
if(!$conn)
{
    die("Error". mysqli_connect_error());
}
else
{
    echo "connection established".'<br>';
}
 $query = "SELECT * from lab9";
 $stmt = mysqli_query($conn,$query);
 while($row = mysqli_fetch_array($stmt,MYSQLI_ASSOC))
 {
    echo $row['url_id'].$row['url_host_id'].$row['url_domain_id'].$row['url_protocol'].$row['url_host'].$row['url_domain'].$row['url_tld'].$row['url_path'].$row['url_last_crawl_time'].$row['url_status'].$row['url_resource_type'].$row['url_crawl_error'].$row['url_page_save_file'].$row['url_added_date'].$row['url_link_qty'].$row['url_file_size'].$row['url_html_file_path'].$row['url_page_title'].$row['url_page description'].'<br>';
 }
?>