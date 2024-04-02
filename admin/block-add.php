<?php
include_once("config2.php");
include_once("includes/validation.php");
?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Responsive Bootstrap Advance Admin Template</title>
	<?php include_once("includes/head.php"); ?>
</head>

<body>
	<div id="wrapper">
		<?php include_once("includes/navbar-top.php"); ?>
		<?php include_once("includes/navbar-side.php"); ?>
		<div id="page-wrapper">
			<div id="page-inner">
				<div class="row">
					<div class="col-md-12">
						<h1 class="page-head-line">block Add</h1>
						<span class="page-subhead-line"><strong><a href="dashboard.php">Dashboard</a> >> Add block </span>

					</div>
				</div>

				<div class="row">
					<div class="col-md-12 col-sm-6 col-xs-12">
						<div class="panel panel-info">
							<div class="panel-body">
								<?php //include_once("message.php");  ?>

								<form action="block-save.php" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
										<label>Enter identifier</label>
										<input class="form-control" name="identifier" type="text">
									</div>
									<div class="form-group">
										<label>Enter Titel</label>
										<input class="form-control" name="titel" type="text">
									</div>
									<div class="form-group">
										<label>Enter Heading</label>
										<input class="form-control" name="heading" type="text">
									</div>
									<div class="form-group">
										<label>Enter Ordering</label>
										<input class="form-control" name="ordering" type="number">
									</div>


									<div class="form-group">
										<label>Status</label>
										<select name="status" class="form-control">
											<option></option>
											<option value="1">Enable</option>
											<option value="2">Disable</option>
										</select>
									</div>
									
									<div class="form-group">
										<label>Enter description </label>
										<textarea name="description" id="" cols="30" rows="10"></textarea>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="panel panel-default">
												<div class="panel-body">

													<div class="form-group">
														<label class="control-label col-lg-4"><strong>Banner Image</strong></label>
														<div class="">
															<div class="fileupload fileupload-new" data-provides="fileupload">
																<span class="fileupload-preview"></span>
																<a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>
															</div>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-lg-4"></label>
														<div class="">
															<div class="fileupload fileupload-new" data-provides="fileupload">
																<div class="fileupload-preview thumbnail" style="width: 200px; height: 150px;"></div>
																<div>
																	<span class="btn btn-file btn-success">
																		<span class="fileupload-new">Select image</span>
																		<span class="fileupload-exists">Change</span>
																		<input name="image" type="file" name="image">
																	</span>
																	<a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
																</div>
															</div>
														</div>
													</div>

												</div>
											</div>

										</div>
									</div>
									
									
									<button class="btn btn-info">Save </button>

								</form>
							</div>
						</div>
					</div>
				</div>

			</div>
			<!-- /. PAGE INNER  -->
		</div>
		<!-- /. PAGE WRAPPER  -->
	</div>
	<!-- /. WRAPPER  -->

	<script src="https://cdn.tiny.cloud/1/do4xutgtb0ws8yotpwqm9xapdw3dgmy9iv047kgf9mhmqa0w/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'ai tinycomments mentions anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed permanentpen footnotes advtemplate advtable advcode editimage tableofcontents mergetags powerpaste tinymcespellchecker autocorrect a11ychecker typography inlinecss',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | align lineheight | tinycomments | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name',
            mergetags_list: [{
                    value: 'First.Name',
                    title: 'First Name'
                },
                {
                    value: 'Email',
                    title: 'Email'
                },
            ],
            ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant")),
        });
    </script>

	<?php include_once("includes/footer.php"); ?>



</body>

</html