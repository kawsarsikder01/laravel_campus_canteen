@php
$jsonFormetedSilderData = file_get_contents("data_source/slider.json");
$silderDatas = json_decode($jsonFormetedSilderData);
@endphp

<div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
        <?php
            $active = '';
            foreach($silderDatas as $key=> $slider):
                if($key == 0){
                    $active = 'active';
                }else{
                    $active = '';
                }
        ?>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?=$key?>" class="<?=$active?>" aria-current="true" aria-label="Slide <?php echo $key?>"></button>
        <?php
            endforeach
        ?>  
        </div>
        <div class="carousel-inner">
            <?php
            foreach($silderDatas as $key=> $slider):
                if($key == 0){
                    $active = 'active';
                }else{
                    $active = '';
                }
            ?>
            <div class="carousel-item <?=$active?>">
                <img src="<?=$slider->src?>" class="d-block w-100" alt="<?=$slider->alt?>">
                    <div class="carousel-caption ">
                        <h5 style="color: white;"><?=$slider->title ?></h5>
                        <p style="color: white;"><?=$slider->description ?></p>
                        <p>
                            <a href="<?=$slider->url?>" class="btn btn-warning mt3">Show More</a>
                        </p>
                    </div>
            </div>
          <?php
          endforeach
          ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
