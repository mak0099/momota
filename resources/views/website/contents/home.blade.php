@extends('website.layouts.master')
@section('style')
@endsection
@section('content')
{{-- Slider --}}
@include('website.layouts.slider')
<div class="page_content_wrap page_paddings_no">
	<div class="content_wrap">
		<div class="content">
			<div class="itemscope post_item post_item_single post_featured_default post_format_standard page type-page status-publish hentry" itemscope itemtype="http://schema.org/Article">
				<div class="post_content" itemprop="articleBody">
				@if ($mission_list->count() > 0)
					<div class="block_1473435558335">
						<div class="column_container">
							<div class="column-inner">
								<div class="wrapper">
									<div id="sc_services_1443866382_wrap" class="sc_services_wrap">
										<div id="sc_services_1443866382" class="sc_services sc_services_style_services-1 sc_services_type_images  margin_top_huge margin_bottom_huge">
											<h2 class="sc_services_title sc_item_title sc_item_title_without_descr">Our Mission</h2>
											<div class="sc_services_descr sc_item_descr">Protecting the rights and wellbeing of every disadvantaged Women</div>
											<div class="sc_columns columns_wrap">
												@foreach ($mission_list as $item)
												<div class="column-1_3 column_padding_bottom">
													<div id="sc_services_1443866382_1" class="sc_services_item sc_services_item_1 odd first">
														<div class="sc_services_item_featured post_featured">
															<div class="post_thumb" data-image="" data-title="Promoting the right and wellbeing of every child, in everything we do.">
																<a class="hover_icon hover_icon_link" href="{{ route('mission_detail', $item) }}"><img width="136" height="136" alt="mission_1.png'" src="{{ asset($item->image_path ?? 'images/no-image.png') }}"></a>
															</div>
														</div>
														<div class="sc_services_item_content">
															<h4 class="sc_services_item_title"><a href="{{ route('mission_detail', $item) }}">{{ str_limit($item->description, 150) }}</a></h4>
															<div class="sc_services_item_description">
															</div>
														</div>
													</div>
												</div>
												@endforeach
											</div>
											<div class="sc_services_button sc_item_button"><a href="{{ route('missions') }}" class="sc_button sc_button_square sc_button_style_filled sc_button_size_large  sc_button_iconed icon-arrow">Learn more about Mission</a></div>
										</div>
										<!-- /.sc_services -->
									</div>
									<!-- /.sc_services_wrap -->
									<div class="h10"></div>
								</div>
							</div>
						</div>
					</div>
				@endif

				@if ($project_list->count() > 0)
					<div class="block">
						<div class="column_container">
							<div class="column-inner">
								<div class="wrapper">
									<div class="h55"></div>
									<div id="sc_donations_108588160" class="sc_donations sc_donations_style_excerpt">
										<h2 class="sc_donations_title sc_item_title">Our Project & Program</h2>
										<div class="sc_donations_descr sc_item_descr">You can help lots of people by donating little. <b>See our project.</b></div>
										<div class="sc_donations_columns_wrap">
											@foreach($project_list as $item)
											<div class="post_item_excerpt post_type_donation sc_donations_column-1_3">
												<div class="post_featured">
													<img style="width: 320px; height:220px;" src="{{ asset($item->image_path ?? 'images/no-image.png') }}" class="attachment-thumb_med size-thumb_med" alt="Education to Every Child" />
												</div>
												<!-- .post_featured -->
												<div class="post_body">
													<div class="post_header entry-header">
														<h4 class="entry-title"><a href="{{ route('project_detail', $item) }}" rel="bookmark">{{ $item->title }}</a></h4>
													</div>
													<!-- .entry-header -->
													<div class="post_content entry-content">
														<p>{{ str_limit($item->description, 100)}}</p>

														<a class="more-link" href="{{ route('project_detail', $item) }}">Detail</a> </div>
													<!-- .entry-content -->
												</div>
												<!-- .post_body -->
											</div>
											@endforeach
										</div>
									</div>
									<!-- /.sc_donations -->
									<div class="h28"></div>
								</div>
							</div>
						</div>
					</div>
				@endif
					<div class="block_1473684441770">
						<div class="wrapper">
						<div class="columns_wrap">
							<div class="column_container column-4_12">
								<div class="column-inner">
										<h2 class="sc_title sc_title_regular margin_top_large margin_bottom_tiny">Where the<br />money goes</h2>
										<div class="h5px"></div>
										<h4 class="sc_title sc_title_regular margin_top_null margin_bottom_small">Current operation and program<br />spending breakdown</h4>
										<ul class="sc_list sc_list_style_ul">
											<li class="sc_list_item odd first" title="Education and Prevention"><a href="single-cause.html">Education and Prevention</a></li>
											<li class="sc_list_item even" title="Trauma Care for Children"><a href="single-cause.html">Trauma Care for Children</a></li>
											<li class="sc_list_item odd" title="Fundraising "><a href="single-cause.html">Fundraising</a></li>
											<li class="sc_list_item even" title="Research and Advocacy"><a href="single-cause.html">Research and Advocacy</a></li>
											<li class="sc_list_item odd" title="Culture and Community"><a href="single-cause.html">Culture and Community</a></li>
										</ul>
								</div>
							</div>
							<div class="column_container column-8_12">
								<div class="column-inner">
									<div class="sc_section skills_demo margin_top_large alignright">
										<div class="sc_section_inner">
											<div class="sc_section_content_wrap">
												<div id="sc_skills_diagram_734942409" class="sc_skills sc_skills_bar sc_skills_vertical" data-type="bar" data-caption="Skills" data-dir="vertical">
													<div class="columns_wrap sc_skills_columns sc_skills_columns_5">
														<div class="sc_skills_column column-1_5">
															<div class="sc_skills_item sc_skills_style_1 odd first">
																<div class="sc_skills_total" data-start="0" data-stop="85" data-step="1" data-max="100" data-speed="39" data-duration="3315" data-ed="%">0%</div>
																<div class="sc_skills_count"></div>
																<div class="sc_skills_info">
																	<div class="sc_skills_label">Education and Prevention</div>
																</div>
															</div>
														</div>
														<div class="sc_skills_column column-1_5">
															<div class="sc_skills_item sc_skills_style_1 even">
																<div class="sc_skills_total" data-start="0" data-stop="75" data-step="1" data-max="100" data-speed="16" data-duration="1200" data-ed="%">0%</div>
																<div class="sc_skills_count"></div>
																<div class="sc_skills_info">
																	<div class="sc_skills_label">Trauma Care for Children</div>
																</div>
															</div>
														</div>
														<div class="sc_skills_column column-1_5">
															<div class="sc_skills_item sc_skills_style_1 odd">
																<div class="sc_skills_total" data-start="0" data-stop="80" data-step="1" data-max="100" data-speed="30" data-duration="2400" data-ed="%">0%</div>
																<div class="sc_skills_count"></div>
																<div class="sc_skills_info">
																	<div class="sc_skills_label">Research and Advocacy</div>
																</div>
															</div>
														</div>
														<div class="sc_skills_column column-1_5">
															<div class="sc_skills_item sc_skills_style_1 even">
																<div class="sc_skills_total" data-start="0" data-stop="73" data-step="1" data-max="100" data-speed="33" data-duration="2409" data-ed="%">0%</div>
																<div class="sc_skills_count"></div>
																<div class="sc_skills_info">
																	<div class="sc_skills_label">Fundraising</div>
																</div>
															</div>
														</div>
														<div class="sc_skills_column column-1_5">
															<div class="sc_skills_item sc_skills_style_1 odd">
																<div class="sc_skills_total" data-start="0" data-stop="92" data-step="1" data-max="100" data-speed="37" data-duration="3404" data-ed="%">0%</div>
																<div class="sc_skills_count"></div>
																<div class="sc_skills_info">
																	<div class="sc_skills_label">Culture and Community</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						</div>
					</div>
					<div class="page_content_wrap page_paddings_yes">

				@if ($gallery_list->count() > 0)
				<div class="content_wrap">
					<div class="content">
						<div class="itemscope post_item post_item_single post_featured_default post_format_standard page type-page status-publish hentry" itemscope itemtype="http://schema.org/Article">
							<div class="post_content" itemprop="articleBody">
								<div class="wrap">
									<div class="column_container">
										<div class="column-inner">
											<div class="wrapper">
												<h2 class="sc_title sc_title_regular sc_align_center">PHOTO GALLERY</h2>
												<!-- THE ESSENTIAL GRID 2.0.9.1 -->
												<!-- GRID WRAPPER FOR CONTAINER SIZING - HERE YOU CAN SET THE CONTAINER SIZE AND CONTAINER SKIN -->
												<div class="myportfolio-container minimal-light" id="esg-grid-1-1-wrap">
													<!-- THE GRID ITSELF WITH FILTERS, PAGINATION, SORTING ETC... -->
													<div id="esg-grid-1-1" class="esg-grid">
														<!-- ############################ -->
														<!-- THE GRID ITSELF WITH ENTRIES -->
														<!-- ############################ -->
														<ul>
															@foreach($gallery_list as $item)
															<li class="filterall filter-gallery filter-adoption filter-donation eg-washington-wrapper eg-post-id-462" data-date="1473690049">
																<!-- THE CONTAINER FOR THE MEDIA AND THE COVER EFFECTS -->
																<div class="esg-media-cover-wrapper">
																	<!-- THE MEDIA OF THE ENTRY -->
																	<div class="esg-entry-media"><img src="{{ asset($item->image_path ?? 'images/no-image.png') }}" alt=""></div>
																	<!-- THE CONTENT OF THE ENTRY -->
																	<div class="esg-entry-cover esg-fade" data-delay="0">
																		<!-- THE COLORED OVERLAY -->
																		<div class="esg-overlay esg-fade eg-washington-container" data-delay="0"></div>
																		<div class="esg-center eg-post-462 eg-washington-element-0-a esg-falldown" data-delay="0.1"><a class="eg-washington-element-0 eg-post-462 esgbox" href="{{ asset($item->image_path ?? 'images/no-image.png') }}" title="Save Them All"><i class="eg-icon-search"></i></a></div>
																		<div class="esg-center eg-post-462 eg-washington-element-1-a esg-falldown" data-delay="0.2"><a class="eg-washington-element-1 eg-post-462" href="#" target="_self"><i class="eg-icon-link"></i></a></div>
																		<div class="esg-center eg-washington-element-8 esg-none esg-clear h5px"></div>
																		<div class="esg-center eg-post-462 eg-washington-element-3 esg-flipup" data-delay="0.1">Save Them All</div>
																		<div class="esg-center eg-washington-element-9 esg-none esg-clear h5px"></div>
																	</div>
																	<!-- END OF THE CONTENT IN THE ENTRY -->
																</div>
																<!-- END OF THE CONTAINER FOR THE MEDIA AND COVER/HOVER EFFECTS -->
															</li>
															@endforeach
														</ul>
														<!-- ############################ -->
														<!--      END OF THE GRID         -->
														<!-- ############################ -->
													</div>
													<!-- END OF THE GRID -->
												</div>
												<!-- END OF THE GRID WRAPPER -->
												<div class="clear"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- </div> class="post_content" itemprop="articleBody"> -->
						</div>
						<!-- </div> class="itemscope post_item post_item_single post_featured_default post_format_standard post-452 page type-page status-publish hentry" itemscope itemtype="http://schema.org/Article"> -->
					</div>
					<!-- </div> class="content"> -->
				</div>
				@endif
				<!-- </div> class="content_wrap"> -->
			</div>
					<!-- @if($event_list->count() > 0)
					<div class="block">
						<div class="column_container">
							<div class="column-inner">
								<div class="wrapper">
									<h2 class="sc_title sc_title_regular sc_align_center margin_top_huge margin_bottom_medium">Nearest Events</h2>
									<div class="h05"></div>
									<div id="sc_events_1937176018_wrap" class="sc_events_wrap">
										<div id="sc_events_1937176018" class="sc_events sc_events_style_events-1  margin_bottom_medium">
											<div class="sc_columns columns_wrap">
												@foreach($event_list as $item)
												<div class="column-1_2 column_padding_bottom">
													<div id="sc_events_1937176018_1" class="sc_events_item sc_events_item_1 odd first">
														<div class="sc_events_item_featured post_featured">
															<div class="post_thumb" data-image="{{ asset($item->image_path ?? 'images/no-image.png') }}" data-title="Is a Nonprofit Internship the Best Choice for You?">
																<a class="hover_icon hover_icon_link" href="{{ route('event_detail', $item) }}"><img width="770" height="434" style="width: 770px; height: 300px" alt="Is a Nonprofit Internship the Best Choice for You?" src="{{ asset($item->image_path ?? 'images/no-image.png') }}"></a>
															</div>
														</div>
														<div class="sc_events_item_content">
															<p class="sc_events_item_date">{{ optional($item->start_date)->format('F d, Y') ?? 'Unknown Date' }}</p>
															<h5 class="sc_events_item_title"><a href="{{ route('event_detail', $item) }}">{{ $item->title }}</a></h5>
															<div class="sc_events_item_description">
																<p>{{ str_limit($item->description, 100) }}</p>
																<a href="{{ route('event_detail', $item) }}" class="sc_events_item_readmore">Read more</a>																			</div>
														</div>
													</div>
												</div>
												@endforeach
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					@endif -->
					<div class="block_1474543056562">
						<div class="column_container">
							<div class="column-inner">
								<div class="wrapper">
									<div id="sc_call_to_action_1455563812" class="sc_call_to_action sc_call_to_action_accented sc_call_to_action_style_2">
										<div class="sc_call_to_action_info"><h2 class="sc_call_to_action_title sc_item_title sc_item_title_without_descr">Donate Today to Save Children From the Trauma of Abuse</h2></div><div class="sc_call_to_action_featured"><div class="featured_bg"></div></div><div class="sc_call_to_action_buttons sc_item_buttons"><div class="sc_call_to_action_button sc_item_button"><a href="#" class="sc_button sc_button_square sc_button_style_filled3 sc_button_size_large">Single Donation</a></div><div class="sc_call_to_action_button sc_item_button"><a href="#" class="sc_button sc_button_square sc_button_style_filled sc_button_size_large">Regular Donation</a></div></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			<!-- </div> class="post_content" itemprop="articleBody"> -->
			</div>
		<!-- </div> class="itemscope post_item post_item_single post_featured_default post_format_standard page type-page status-publish hentry" itemscope itemtype="http://schema.org/Article"> -->
	</div>
	<!-- </div> class="content"> -->
	<!-- </div> class="content"> -->
	</div>
<!-- </div> class="content_wrap"> -->
</div>
<!-- </.page_content_wrap> -->
@endsection
@section('script')
@endsection
