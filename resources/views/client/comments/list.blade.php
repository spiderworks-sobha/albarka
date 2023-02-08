<section class="gradient-custom">
          <div class="container my-5 py-5">
            <div class="row d-flex justify-content-center">
              <div class="col-md-12 col-lg-10 col-xl-8">
                <div class="card">
                  <div class="card-body p-4">
                    <h4 class="text-center mb-4 pb-2">Nested comments section</h4>

                    <div class="row">
                      <div id="comment-list-wrap">
                        
                      </div>
                      @include('client.comments.form', ['id'=>$id, 'type'=>$type, 'parent_id'=>$parent_id, 'parant_levels_id'=>$parant_levels_id])
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </section>