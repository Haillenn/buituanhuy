<?php
/*
Template Name: Record
*/
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/upload.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"></link>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/record.css">
    <script src="https://unpkg.com/wavesurfer.js"></script>
</head>

<body <?php body_class(); ?>>
    <div class="container mt-4">
        <div class="text-center">
            <h1 class="text-center">Cho tôi ý kiến đóng góp/lời khuyên</h1>
            <p class="text-center">Bạn chỉ cần ghi âm và dừng khi bạn đã nói hết! Hãy giúp tôi được lắng nghe ý kiến đóng góp từ bạn.</p>
        </div>
        
        <div class="text-center mb-4">
            <?php
            echo '<div>
                <button id="btnStart_'.$i.'" data-did="'.$i.'" class="startButton" onclick="start_record(this)">Ghi âm</button>
                <button id="btnStop_'.$i.'" data-did="'.$i.'" class="stopButton" onclick="stop_record(this)">Gửi cho TH</button>
              </div>';
            ?>
        </div>

        <div class="item-record">
            <?php
                $upload_dir = wp_upload_dir();
                $directory = $upload_dir['basedir'] . '/record/'; 
                $audioFiles = [];

                if (is_dir($directory)) {
                    if ($dirHandle = opendir($directory)) {
                        while (($file = readdir($dirHandle)) !== false) {
                            $filePath = $directory . $file;
                            $fileExtension = pathinfo($filePath, PATHINFO_EXTENSION);
                            if (in_array($fileExtension, ['mp3', 'wav', 'ogg']) && is_file($filePath)) {
                                $audioFiles[] = $file;
                            }
                        }
                        closedir($dirHandle);
                    }
                }
            ?>

            <div id="audio-container" 
                 data-audio-files='<?php echo json_encode($audioFiles); ?>' 
                 data-directory='<?php echo $upload_dir['baseurl'] . '/record/'; ?>'>
            </div>

            <?php if (!empty($audioFiles)) : ?>
                <?php foreach ($audioFiles as $index => $audio) : ?>
                    <div class='audio-item'>
                        <span style="font-weight: bold;" class="text-center"><?php echo "lời nhắn nhủ số $index"; ?></span><br>
                        <div class="waveform" id='waveform<?php echo $index; ?>'></div>
                        <button class='playButton' onclick='togglePlay(<?php echo $index; ?>)'>Nghe</button><br>
                    </div>
                <?php endforeach; ?>
            <?php else : ?>
                <p>Không có file ghi âm nào.</p>
            <?php endif; ?>
        </div>
    </div>

    <!-- menu -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" title="Home" href="https://istudy-tracnghiem.xyz/"><i class="fas fa-home"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" title="About" href="https://istudy-tracnghiem.xyz/about/"><i class="fas fa-user"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" title="Projects" href="https://istudy-tracnghiem.xyz/project/"><i class="fas fa-briefcase"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" title="My Photos" href="https://istudy-tracnghiem.xyz/photo/"><i class="fas fa-camera"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" title="My musics" href="https://istudy-tracnghiem.xyz/music/"><i class="fas fa-layer-group"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" title="My record" href="https://istudy-tracnghiem.xyz/record/"><i class="fas fa-microphone"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-cog"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-chevron-up"></i></a>
                </li>
            </ul>
        </div>
    </nav>

    <?php wp_footer(); ?>
</body>
</html>
