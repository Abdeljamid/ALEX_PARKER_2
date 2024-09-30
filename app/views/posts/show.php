

<head>
    <!-- Meta Tag -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- SEO -->
    <meta name="description" content="150 words" />
    <meta name="author" content="uipasta" />
    <meta name="url" content="http://www.yourdomainname.com" />
    <meta name="copyright" content="company name" />
    <meta name="robots" content="index,follow" />

    <title>DevBlog - Personal Blog Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon/favicon.ico" />
    <link
      rel="apple-touch-icon"
      sizes="144x144"
      type="image/x-icon"
      href="images/favicon/apple-touch-icon.png"
    />

    <!-- All CSS Plugins -->
    <link rel="stylesheet" type="text/css" href="css/plugin.css" />

    <!-- Main CSS Stylesheet -->
    <link rel="stylesheet" type="text/css" href="css/style.css" />

    <!-- Google Web Fonts  -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700"
    />

    <!-- Syntax Highlighter  -->
    <link rel="stylesheet" type="text/css" href="css/syntax/shCore.css" />
    <link
      rel="stylesheet"
      type="text/css"
      href="css/syntax/shThemeDefault.css"
    />

    <!-- HTML5 shiv and Respond.js support IE8 or Older for HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>

              <div class="row">
                <div class="sub-title">
                  <a href="index.html" title="Go to Home Page"
                    ><h2>Back Home</h2></a
                  >
                  <a href="#comment" class="smoth-scroll"
                    ><i class="icon-bubbles"></i
                  ></a>
                </div>

                <div class="col-md-12 content-page">
                  <div class="col-md-12 blog-post">
                    <div>
                      <img src="https://picsum.photos/810/326?random=<?php echo $post['id']; ?>" alt="">
                    </div>

                    <!-- Post Headline Start -->
                    <div class="post-title">
                      <h1>
                      <?php echo $post['title']; ?>
                      </h1>
                    </div>
                    <!-- Post Headline End -->

                    <!-- Post Detail Start -->
                    <div class="post-info">
                      <span><?php echo date('F j, Y', strtotime($post['created_at'])); ?></span> | <span><?php echo $post['category_id']; ?></span>
                    </div>
                    <!-- Post Detail End -->

                    <p>
                    <?php echo $post['text']; ?>

                    </p>

                    <!-- Post Blockquote (Italic Style) Start -->
                    <blockquote class="margin-top-40 margin-bottom-40">
                      <p>
                      <?php echo $post['quote']; ?>
                      </p>
                    </blockquote>
                    <!-- Post Blockquote (Italic Style) End -->

                    <!-- Post Buttons -->
                    <div>
                      <a href="form.html" type="button" class="btn btn-primary"
                        >Edit Post</a
                      >
                      <a
                        href="#"
                        type="button"
                        class="btn btn-secondary"
                        role="button"
                        >Delete Post</a
                      >
                    </div>
                    <!-- Post Buttons End -->
                  </div>
                </div>
              </div>