<!-- Modal insert slide -->
<div class="modal fade" id="insertModalSlide" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create Slide</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form id="form_insert_slide" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="modal-body">
          <div class="form-group">
            <label>Topic</label>
            <!-- <select class="form-control" id="topic_option" name="id_topic"> -->
            <select class="form-control" name="id_topic">
              @foreach($topics as $topic)
                <option value="{{ $topic->id }}">{{ $topic->name }}</option>
              @endforeach              
            </select>
          </div>

          <div class="form-group">
            <label>Tag</label>
            <textarea class="form-control col-xs-12" name="tag"></textarea>
          </div>

          <div>
            <img id="preview_slide_image" class="img-fluid" src="" alt="" srcset="">
          </div>

          <div class="form-group">
            <label>Image</label>
            <input type="file" name="image" id="insert_image_slide" class="form-control" placeholder="Image">
          </div>

          <div class="form-group">
            <label>Heading Primary</label>
            <textarea class="form-control col-xs-12" name="caption"></textarea>
          </div>

          <div class="form-group">
            <label>Heading Secondary</label>
            <textarea class="form-control col-xs-12" name="subtitle"></textarea>
          </div>

        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success insert_slide">Create</button>
        </div>
      </form>
    </div>
  </div>
</div>

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
        <input type="hidden" name="employee_id" value="">

        <div class="form-group" id="employee_role">
          <label>Role</label>
          <select class="form-control" name="employee_id_role">
            @foreach($roles as $role)
              <option value="{{ $role->id }}" name="{{ $role->name }}">{{ $role->name }}</option>
            @endforeach              
          </select>
        </div>


        <div class="form-group">
          <label>Name</label>
          <input type="text" name="employee_name" class="form-control" placeholder="Name">
        </div>

        <div class="form-group">
          <label>Email</label>
          <input type="text" name="employee_email" class="form-control" placeholder="Email">
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
          <label>Topic</label>
          <select class="form-control" name="news_id_topic">
            @foreach($topics as $topic)
              <option value="{{ $topic->id }}" data="{{ $topic->name }}">{{ $topic->name }}</option>
            @endforeach              
          </select>
        </div>

        <!-- <div class="form-group">
          <label>Tag</label>
          <input type="text" name="news_tag" class="form-control" placeholder="Tag">
        </div> -->

        <div class="form-group">
          <label>Tag</label>
          <textarea class="form-control col-xs-12" name="news_tag" id="text-area-test">html</textarea>
        </div>


        <!-- <div class="form-group">
          <label>Caption</label>
          <input type="text" name="news_caption" class="form-control" placeholder="Caption">
        </div> -->

        <div class="form-group">
          <label>Caption</label>
          <textarea class="form-control col-xs-12" name="news_caption"></textarea>
        </div>

        <!-- <div class="form-group">
          <label>Subtitle</label>
          <input type="text" name="news_subtitle" class="form-control" placeholder="Subtitle">
        </div> -->

        <div class="form-group">
          <label>Subtitle</label>
          <textarea class="form-control col-xs-12" name="news_subtitle"></textarea>
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
          <input type="hidden" name="_news_id_topic" value="">
          <div class="form-group" id="news_id_topic">
            <label>Topic</label>
            <select class="form-control" name="news_id_topic">
              @foreach($topics as $topic)
                <option value="{{ $topic->id }}">{{ $topic->name }}</option>
              @endforeach              
            </select>
          </div>

          <div class="form-group">
            <label>Hot News</label>
            <div>
              <label class="radio-inline"><input type="radio" name="news_hot_news" value="1">Yes</label>
              <label class="radio-inline"><input type="radio" name="news_hot_news" value="0" checked>No</label>
            </div>
          </div>

          <div>
            <img id="preview_news_image" class="img-fluid" src="" alt="" srcset="">
          </div>

          <div class="form-group">
            <label>Image</label>
            <input type="file" name="news_image" class="form-control" placeholder="Image">
          </div>

          <!-- <div class="form-group">
            <label>Tag</label>
            <input type="text" name="news_tag" class="form-control" placeholder="Tag">
          </div> -->

          <div class="form-group">
            <label>Tag</label>
            <textarea class="form-control col-xs-12" name="news_tag"></textarea>
          </div>

          <!-- <div class="form-group">
            <label>Caption</label>
            <input type="text" name="news_caption" class="form-control" placeholder="Caption">
          </div> -->

          <div class="form-group">
            <label>Caption</label>
            <textarea class="form-control col-xs-12" name="news_caption"></textarea>
          </div>

          <!-- <div class="form-group">
            <label>Subtitle</label>
            <input type="text" name="news_subtitle" class="form-control" placeholder="Subtitle">
          </div> -->

          <div class="form-group">
            <label>Subtitle</label>
            <textarea class="form-control col-xs-12" name="news_subtitle"></textarea>
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

<!-- Start Insert Video Modal  -->
<div class="modal fade" id="insertModalVideo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create News - Video</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form id="form-insert-video" method="PUT" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="modal-body">
          <input type="hidden" name="_video_id_topic" value="">
          <div class="form-group" id="video_id_topic">
            <label>Topic</label>
            <select class="form-control" name="video_id_topic">
              @foreach($topics as $topic)
                <option value="{{ $topic->id }}">{{ $topic->name }}</option>
              @endforeach              
            </select>
          </div>

          <div class="form-group">
            <label>Hot News</label>
            <div>
              <label class="radio-inline"><input type="radio" name="video_hot_news" value="1">Yes</label>
              <label class="radio-inline"><input type="radio" name="video_hot_news" value="0" checked>No</label>
            </div>
          </div>

          <div>
            <img id="preview_video_image" class="img-fluid" src="" alt="" srcset="">
          </div>

          <div class="form-group">
            <label>Image</label>
            <input type="file" name="video_image" class="form-control" placeholder="Image">
          </div>

          <div>
            <video id="preview_video_video" src="" width="100%" height="auto" preload controls allowFullScreen>
            </video>
          </div>

          <div class="form-group">
            <label>Video</label>
            <input type="file" id="video_video_preview" name="video_video" class="form-control" placeholder="Video">
          </div>

          
          

          <!-- <div class="form-group">
            <label>Tag</label>
            <input type="text" name="video_tag" class="form-control" placeholder="Tag">
          </div> -->

          <div class="form-group">
            <label>Tag</label>
            <textarea class="form-control col-xs-12" name="video_tag"></textarea>
          </div>

          <!-- <div class="form-group">
            <label>Caption</label>
            <input type="text" name="video_caption" class="form-control" placeholder="Caption">
          </div> -->

          <div class="form-group">
            <label>Caption</label>
            <textarea class="form-control col-xs-12" name="video_caption"></textarea>
          </div>

          <!-- <div class="form-group">
            <label>Subtitle</label>
            <input type="text" name="video_subtitle" class="form-control" placeholder="Subtitle">
          </div> -->

          <div class="form-group">
            <label>Subtitle</label>
            <textarea class="form-control col-xs-12" name="video_subtitle"></textarea>
          </div>

        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success insert_video">Create</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- End Insert Video Modal -->

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












      <form id="form-video-video" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div>
          <input type="hidden" name="id_video_hide" value="">
        </div>

        <div class="modal-body">
          <div class="form-group">
            <div id="video-background">
              <video id="show-video" src="" width="100%" height="auto" preload controls allowFullScreen>
              </video>
            </div>
          </div>
        </div>
        <div class="modal-footer justify-content-center" id="video-modal-foot">
          <label class="btn btn-outline-primary btn-rounded btn-md ml-4" for="video_video">Change video</label>
          <input style="visibility:hidden;" type="file" id="video_video" name="video_video">
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
          <label>Tag</label>
          <textarea class="form-control col-xs-12" name="tag"></textarea>
        </div>

        <!-- <div class="form-group">
          <label>Heading Primary</label>
          <input type="text" name="heading_primary" id="update_heading_primary" class="form-control" placeholder="Heading Primary">
        </div> -->

        <div class="form-group">
          <label>Heading Primary</label>
          <textarea class="form-control col-xs-12" name="heading_primary"></textarea>
        </div>

        <!-- <div class="form-group">
          <label>Heading Secondary</label>
          <input type="text" name="heading_secondary" id="update_heading_secondary" class="form-control" placeholder="Heading Secondary">
        </div> -->

        <div class="form-group">
          <label>Heading Secondary</label>
          <textarea class="form-control col-xs-12" name="heading_secondary"></textarea>
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

<!-- Start Edit Video Modal  -->
<div class="modal fade" id="editModalVideo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Video</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <div class="form-group">
          <label>Topic</label>
          <select class="form-control" name="video_id_topic">
            @foreach($topics as $topic)
              <option value="{{ $topic->id }}" data="{{ $topic->name }}">{{ $topic->name }}</option>
            @endforeach              
          </select>
        </div>

        <!-- <div class="form-group">
          <label>Tag</label>
          <input type="text" name="video_tag" class="form-control" placeholder="Tag">
        </div> -->

        <div class="form-group">
          <label>Tag</label>
          <textarea class="form-control col-xs-12" name="video_tag"></textarea>
        </div>

        <!-- <div class="form-group">
          <label>Caption</label>
          <input type="text" name="video_caption" class="form-control" placeholder="Caption">
        </div> -->

        <div class="form-group">
          <label>Caption</label>
          <textarea class="form-control col-xs-12" name="video_caption"></textarea>
        </div>

        <!-- <div class="form-group">
          <label>Subtitle</label>
          <input type="text" name="video_subtitle" class="form-control" placeholder="Subtitle">
        </div> -->

        <div class="form-group">
          <label>Subtitle</label>
          <textarea class="form-control col-xs-12" name="video_subtitle"></textarea>
        </div>


      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary update_video">Update data</button>
      </div>

    </div>
  </div>
</div>
<!-- End Edit Video Modal -->


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