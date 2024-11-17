<?php
include '../Datas/SubHomeData.php';

// -------------------------------Class Defined--------------------------------------

$videosClassNine = "SH-videosClassNine";
$ClassNineVideos = "SH-ClassNineVideos";
$ClassNine = "SH-ClassNine";
$imgSrc = "SH-imgSrc";
$videoName = "SH-videoName";
$subjectClass = "SH-subjectClass";
$subjectName = "SH-subjectName";
$ClassIn = "SH-ClassIn";
$ChannelName = "SH-ChannelName";
$button = "SH-button";
$icon = "material-symbols-outlined";
$arrow = "SH-fArrow";

echo "<div class=" . $videosClassNine . ">";
echo "<div class=" . $ClassNineVideos . ">";
foreach ($VideosClassNine as $array) {
    echo "<div class=" . $ClassNine . ">
    <img src=" . $array["imgSrc"] . " class=" . $imgSrc . ">
    <div class=" . $videoName . ">" . $array["videoName"] . "</div>
    <div class=" . $subjectClass . ">
    <div class=" . $subjectName . "> " . $array["subjectName"] . "</div>
    <div class=" . $ClassIn . "> " . $array["classIn"] . " </div>
    </div>
    <div class=" . $ChannelName . "> " . $array["channelName"] . " </div>
    <a href=" . $array["videoLink"] . "> <button class=" . $button . ">Video Link</button></a>
    </div>";
}
echo "</div>";
echo "<div class=" . $arrow . ">
<span class=" . $icon . ">
arrow_forward_ios
</span>
</div>";
echo "</div>";

echo "<div class=" . $videosClassNine . ">";
echo "<div class=" . $ClassNineVideos . ">";
foreach ($VideosClassTen as $array) {
    echo "<div class=" . $ClassNine . ">
    <img src=" . $array["imgSrc"] . " class=" . $imgSrc . ">
    <div class=" . $videoName . ">" . $array["videoName"] . "</div>
    <div class=" . $subjectClass . ">
    <div class=" . $subjectName . "> " . $array["subjectName"] . "</div>
    <div class=" . $ClassIn . "> " . $array["classIn"] . " </div>
    </div>
    <div class=" . $ChannelName . "> " . $array["channelName"] . " </div>
    <a href=" . $array["videoLink"] . "> <button class=" . $button . ">Video Link</button></a>
    </div>";
}
echo "</div>";
echo "<div class=" . $arrow . ">
<span class=" . $icon . ">
arrow_forward_ios
</span>
</div>";
echo "</div>";

echo "<div class=" . $videosClassNine . ">";
echo "<div class=" . $ClassNineVideos . ">";
foreach ($VideosClassEleven as $array) {
    echo "<div class=" . $ClassNine . ">
    <img src=" . $array["imgSrc"] . " class=" . $imgSrc . ">
    <div class=" . $videoName . ">" . $array["videoName"] . "</div>
    <div class=" . $subjectClass . ">
    <div class=" . $subjectName . "> " . $array["subjectName"] . "</div>
    <div class=" . $ClassIn . "> " . $array["classIn"] . " </div>
    </div>
    <div class=" . $ChannelName . "> " . $array["channelName"] . " </div>
    <a href=" . $array["videoLink"] . "> <button class=" . $button . ">Video Link</button></a>
    </div>";
}
echo "</div>";
echo "<div class=" . $arrow . ">
<span class=" . $icon . ">
arrow_forward_ios
</span>
</div>";
echo "</div>";

echo "<div class=" . $videosClassNine . ">";
echo "<div class=" . $ClassNineVideos . ">";
foreach ($VideosClassTwelve as $array) {
    echo "<div class=" . $ClassNine . ">
    <img src=" . $array["imgSrc"] . " class=" . $imgSrc . ">
    <div class=" . $videoName . ">" . $array["videoName"] . "</div>
    <div class=" . $subjectClass . ">
    <div class=" . $subjectName . "> " . $array["subjectName"] . "</div>
    <div class=" . $ClassIn . "> " . $array["classIn"] . " </div>
    </div>
    <div class=" . $ChannelName . "> " . $array["channelName"] . " </div>
    <a href=" . $array["videoLink"] . "> <button class=" . $button . ">Video Link</button></a>
    </div>";
}
echo "</div>";
echo "<div class=" . $arrow . ">
<span class=" . $icon . ">
arrow_forward_ios
</span>
</div>";
echo "</div>";
