<div class="col-md-12 blog-post row">
                  <div>
                    <a href="form.html" type="button" class="btn btn-primary"
                      >Add a Post</a
                    >
                  </div>
    <?php foreach ($posts as $post): ?>
                    <div class="post-title">
                      <a href="single.html"
                        ><h1>
                        <?php echo $post['title']; ?>
                        </h1></a
                      >
                    </div>
                    <div class="post-info">
                      <span><?php echo date('F j, Y', strtotime($post['created_at'])); ?></span> | <span><?php echo $post['category_id']; ?></span>
                    </div>
                    <p>
                    <?php echo substr($post['text'], 0, 150)?> ...
                    
                    </p>
                    <a
                      href="posts/<?php echo $post['id']; ?>/<?php echo \Core\Helpers\slugify($post['title']); ?>"
                      class="
                        button button-style button-anim
                        fa fa-long-arrow-right
                      "
                      ><span>Read More</span></a
                    >
    <?php endforeach; ?>
                  </div>