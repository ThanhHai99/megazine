<!-- Start Edit Employee Modal - All -->
<div class="modal fade" id="editModalEmployee-all" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Employee - All</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
      <input type="hidden" id="id" value="">

        <div class="form-group">
          <label>Role</label>
          <!-- <input type="text" name="id_topic" id="insert_topic_all" class="form-control" placeholder="Topic"> -->
          <select class="form-control" id="update_role">
            @foreach($roles as $role)
              <option value="{{ $role->id }}">{{ $role->name }}</option>
            @endforeach              
          </select>
        </div>

        <div class="form-group">
          <label>Name</label>
          <input type="text" name="name" id="update_name" class="form-control" placeholder="Name">
        </div>

        <div class="form-group">
          <label>Email</label>
          <input type="text" name="email" id="update_email" class="form-control" placeholder="Email">
        </div>
      </div>
        
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary update_employee">Update data</button>
      </div>

    </div>
  </div>
</div>
<!-- End Edit Employee Modal - All-->


<!-- Start Edit Employee Modal  -->
<div class="modal fade" id="editModalEmployee" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Employee</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
      <input type="hidden" id="id" value="">

        <div class="form-group">
          <label>Name</label>
          <input type="text" name="name" id="update_name" class="form-control" placeholder="Name">
        </div>

        <div class="form-group">
          <label>Email</label>
          <input type="text" name="email" id="update_email" class="form-control" placeholder="Email">
        </div>
      </div>
        
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary update_employee">Update data</button>
      </div>

    </div>
  </div>
</div>
<!-- End Edit Employee Modal -->

<!-- Start Edit News Modal  -->
<div class="modal fade" id="editModalNews" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit News</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">

        <div class="form-group">
          <label>Tag</label>
          <input type="text" name="tag" id="update_tag" class="form-control" placeholder="Tag">
        </div>

        <div class="form-group">
          <label>Caption</label>
          <input type="text" name="caption" id="update_caption" class="form-control" placeholder="Caption">
        </div>

        <div class="form-group">
          <label>Subtitle</label>
          <input type="text" name="subtitle" id="update_subtitle" class="form-control" placeholder="Subtitle">
        </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary update_news">Update data</button>
      </div>

    </div>
  </div>
</div>
<!-- End Edit News Modal -->

<!-- Start Insert News Modal  -->
<div class="modal fade" id="insertModalNews" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create News</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form id="form-insert-news" method="PUT" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="modal-body">
          <div class="form-group">
            <label>Hot News</label>
            <input type="text" name="hot_news" id="insert_hot_news" class="form-control" placeholder="Hot News">
          </div>

          <div class="form-group">
            <label>Image</label>
            <input type="file" name="image" id="insert_image" class="form-control" placeholder="Image">
          </div>

          <div class="form-group">
            <label>Tag</label>
            <input type="text" name="tag" id="insert_tag" class="form-control" placeholder="Tag">
          </div>

          <div class="form-group">
            <label>Caption</label>
            <input type="text" name="caption" id="insert_caption" class="form-control" placeholder="Caption">
          </div>

          <div class="form-group">
            <label>Subtitle</label>
            <input type="text" name="subtitle" id="insert_subtitle" class="form-control" placeholder="Subtitle">
          </div>

          <div class="form-group">
            <input type="hidden" name="id_topic" value="">
          </div>

          <div class="form-group">
            <input type="hidden" name="id_creator" value="">
          </div>

        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success insert_news">Create</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- End Insert News Modal -->

<!-- Start Insert News Modal - All -->
<div class="modal fade" id="insertModalNews_all" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create News</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form id="form-insert-news_all" method="PUT" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="modal-body">

          <div class="form-group">
            <label>Topic</label>
            <!-- <input type="text" name="id_topic" id="insert_topic_all" class="form-control" placeholder="Topic"> -->
            <select class="form-control" id="topic_option">
              @foreach($topics as $topic)
                <option value="{{ $topic->id }}">{{ $topic->name }}</option>
              @endforeach              
            </select>
          </div>

          <div class="form-group">
            <label>Hot News</label>
            <input type="text" name="hot_news" id="insert_hot_news_all" class="form-control" placeholder="Hot News">
          </div>

          <div class="form-group">
            <label>Image</label>
            <input type="file" name="image" id="insert_image_all" class="form-control" placeholder="Image">
          </div>

          <div class="form-group">
            <label>Tag</label>
            <input type="text" name="tag" id="insert_tag_all" class="form-control" placeholder="Tag">
          </div>

          <div class="form-group">
            <label>Caption</label>
            <input type="text" name="caption" id="insert_caption_all" class="form-control" placeholder="Caption">
          </div>

          <div class="form-group">
            <label>Subtitle</label>
            <input type="text" name="subtitle" id="insert_subtitle_all" class="form-control" placeholder="Subtitle">
          </div>

          <div class="form-group">
            <input type="hidden" name="id_creator" value="">
          </div>

          <div class="form-group">
            <input type="hidden" name="id_topic" value="">
          </div>

        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success insert_news_all">Create</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- End Insert News Modal - All-->

<!-- Start Image News Modal -->
<div class="modal fade" id="editImageNews" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <button type="button" class="btn btn-rounded btn-md ml-4" data-dismiss="modal">
      <i class="fa fa-times-circle" style="font-size:20px;color:#2b2626; width:100%; height:100%"></i>
    </button>
      <!-- <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div> -->

      <form id="form-image-news" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="modal-body">
          <div class="form-group">
            <img id="show-image-news" class="img-fluid" src="" alt="" srcset="">
          </div>
        </div>

        <div>
          <input type="hidden" name="id_news_hide" value="">
        </div>

        <div class="modal-footer justify-content-center" id="news-image-modal-foot">
          <label class="btn btn-outline-primary btn-rounded btn-md ml-4" for="image_news">Change image</label>
          <input style="visibility:hidden;" type="file" id="image_news" name="image_news">
        </div>
      </form>

    </div>
  </div>
</div>
<!-- End Image News Modal -->

<!-- Start Image Video Modal -->
<div class="modal fade" id="editImageVideo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <button type="button" class="btn btn-rounded btn-md ml-4" data-dismiss="modal">
      <i class="fa fa-times-circle" style="font-size:20px;color:#2b2626; width:100%; height:100%"></i>
    </button>

      <form id="form-image-video" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="modal-body">
          <div class="form-group">
            <img id="show-image-video" class="img-fluid" src="" alt="" srcset="">
          </div>
        </div>

        <div>
          <input type="hidden" name="id_video_hide" value="">
        </div>

        <div class="modal-footer justify-content-center" id="video-image-modal-foot">
          <label class="btn btn-outline-primary btn-rounded btn-md ml-4" for="image_video">Change image</label>
          <input style="visibility:hidden;" type="file" id="image_video" name="image_video">
        </div>
      </form>

    </div>
  </div>
</div>
<!-- End Image Video Modal -->

<!-- Start Edit Slide Modal  -->
<div class="modal fade" id="editModalSlide" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Slide</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">

        <!-- <div class="form-group">
          <label>Tag</label>
          <input type="text" name="tag" id="update_tag" class="form-control" placeholder="Tag">
        </div> -->

        <div class="form-group">
          <label>Heading Primary</label>
          <input type="text" name="heading_primary" id="update_heading_primary" class="form-control" placeholder="Heading Primary">
        </div>

        <div class="form-group">
          <label>Heading Secondary</label>
          <input type="text" name="heading_secondary" id="update_heading_secondary" class="form-control" placeholder="Heading Secondary">
        </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary update_slide">Update data</button>
      </div>

    </div>
  </div>
</div>
<!-- End Edit Slide Modal -->

<!-- Start Image Slide Modal -->
<div class="modal fade" id="editImageSlide" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <button type="button" class="btn btn-rounded btn-md ml-4" data-dismiss="modal">
      <i class="fa fa-times-circle" style="font-size:20px;color:#2b2626; width:100%; height:100%"></i>
    </button>

      <form id="form-image-slide" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="modal-body">
          <div class="form-group">
            <img id="show-image-slide" class="img-fluid" src="" alt="" srcset="">
          </div>
        </div>

        <div>
          <input type="hidden" name="id_slide_hide" value="">
        </div>

        <div class="modal-footer justify-content-center" id="slide-image-modal-foot">
          <label class="btn btn-outline-primary btn-rounded btn-md ml-4" for="image_slide">Change image</label>
          <input style="visibility:hidden;" type="file" id="image_slide" name="image_slide">
        </div>
      </form>

    </div>
  </div>
</div>
<!-- End Image Slide Modal -->