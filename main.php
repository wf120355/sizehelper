<?php
include "detail/header.php";
?>
<div id="reviews" class="J_DetailSection" data-reviewapi="" data-reviewcountapi="" data-listapi="" data-commonapi=""
data-usefulapi="" style="display: block; ">
	<h4 class="hd" style="display: none; "></h4>
	<div class="tb-revhd">
		<div class="tb-r-summary J_Tb_r-summary">
			<div class="tb-r-score">
				<span>宝贝与描述相符</span><strong>4.9</strong><span>分</span>
			</div>
			<div class="tb-r-count-num">
				共65次打分
			</div>
			<div class="tb-r-links">
				<a target="_blank" href="http://rate.taobao.com/user-rate-3c20748257c11324979daa8c3c403a6d.htm?spm=2013.1.1000126.5#dynamic-rate" class="r-shoprate tb-action" data-act="sendclick" data-val="12.18"><i></i>店铺评价</a>
			</div>
			<!--新添加  宝贝尺码描述-->
			<div class="tb-r-size clear">
				<div class="tb-r-size-des">
					<p>
						宝贝尺码描述
					</p>
					<p class="tb-r-des-total">
						共1823次描述
					</p>
				</div>
				<div class="tb-r-comment-scale">
					<div class="tb-r-comment-wrapper tb-r-max-wrapper">
						<div class="J_ScaleBar">
							<div data-value="80" data-total="100"></div>
						</div>
						<span class="tb-r-comment-des">80%买家认为鞋码标准</span>
					</div>
					<div class="tb-r-comment-wrapper tb-r-normal-wrapper">
						<div class="J_ScaleBar">
							<div data-value="10" data-total="100"></div>
						</div>
						<span class="tb-r-comment-des">10%买家认为鞋码标准</span>
					</div>
					<div class="tb-r-comment-wrapper">
						<div class="J_ScaleBar">
							<div data-value="10" data-total="100"></div>
						</div>
						<span class="tb-r-comment-des tb-r-min-wrapper">10%买家认为鞋码标准</span>
					</div>
				</div>
				<a id="J_SizeHelperTrigger" class="tb-r-helper-button"> 尺码推荐 </a>
			</div>
		</div>
		<div id="J_SizeHelperPanel" class="SizeHelperPanel">
			<div class="SizeHelperSizeWrapper">
				<lable>
					您平常所穿
					<select id="J_SizeHelperSize">
						<option value="0">尺码</option>
						<option value="31">31码</option>
						<option value="32">32码</option>
						<option value="33">33码</option>
						<option value="34">34码</option>
						<option value="35">35码</option>
						<option value="36">36码</option>
						<option value="37">37码</option>
						<option value="38">38码</option>
						<option value="39">39码</option>
						<option value="40">40码</option>
						<option value="41">41码</option>
						<option value="42">42码</option>
						<option value="43">43码</option>
						<option value="44">44码</option>
						<option value="45">45码</option>

					</select>
				</lable>
				<span class="sizeHelperTips"> 选择您的尺码，可以查看跟您相似的TA的尺码选择。 </span>
			</div>
			<div id="J_NoSize" class="SizeHelperNoSize">
			
			</div>
			<div id="J_SizeHelperResult" class="sh-result-panel">
				<div class="sh-max-scale sh-scale">
					<span class="sh-size J_Sh-size">37码</span>
					<div class="sh-scale-wrapper">
						<div class="J_ScaleBar">
							<div data-value="80" data-total="100"></div>
						</div>
					</div>
					<span class="sh-scale-tips">80%平常穿37码的买家购买了37码，并认为合适</span>
				</div>
				<div class="sh-normal-scale sh-scale">
					<span class="sh-size J_Sh-size">38码</span>
					<div class="sh-scale-wrapper">
						<div class="J_ScaleBar">
							<div data-value="10" data-total="100"></div>
						</div>
					</div>
					<span class="sh-scale-tips">10%平常穿37码的买家购买了38码，并认为合适</span>
				</div>
				<div class="sh-min-scale sh-scale">
					<span class="sh-size J_Sh-size">39码</span>
					<div class="sh-scale-wrapper">
						<div class="J_ScaleBar">
							<div data-value="10" data-total="100"></div>
						</div>
					</div>
					<span class="sh-scale-tips">10%平常穿37码的买家购买了39码，并认为合适</span>
				</div>
			</div>
		</div>
		<div class="tb-r-box">
			<div class="tb-r-filter">
				<ul class="tb-taglist">
					<li class="tb-current">
						<input id="reviews-t-1" type="radio" data-act="type" data-val="" checked="checked" name="reviews-type" class="tb-action">
						<label for="reviews-t-1"><span class="r-c-title">全部</span></label>
					</li>
					<li class="tb-long">
						<input id="reviews-t-2" type="radio" data-act="type" data-val="1" name="reviews-type" class="tb-action">
						<label for="reviews-t-2"><span class="r-c-title">好评</span><span data-count="24" data-count-f="34" class="tb-r-count">(24)</span></label>
					</li>
					<li class="tb-long">
						<input id="reviews-t-3" type="radio" data-act="type" data-val="0" name="reviews-type" class="tb-action">
						<label for="reviews-t-3"><span class="r-c-title">中评</span><span data-count="1" class="tb-r-count">(1)</span></label>
					</li>
					<li class="tb-long">
						<input id="reviews-t-4" type="radio" data-act="type" data-val="-1" name="reviews-type" class="tb-action">
						<label for="reviews-t-4"><span class="r-c-title">差评</span><span data-count="0" class="tb-r-count">(0)</span></label>
					</li>
					<li class="tb-long">
						<input id="reviews-t-5" type="radio" data-act="type" data-val="2" name="reviews-type" class="tb-action">
						<label for="reviews-t-5"><span class="r-c-title">追加</span><span data-count="1" class="tb-r-count">(1)</span></label>
					</li>
				</ul>
				<ul class="tb-r-acts">
					<li>
						<input id="review-cb-hascnt" data-act="hascontent" checked="checked" type="checkbox">
						<label for="review-cb-hascnt">有内容的评价</label>
					</li>
					<li class="tb-r-sort">
						<span z-index="0" class="tb-current">推荐排序</span><i class="tb-r-hot"></i>
						<ul>
							<li class="tb-r-default">
								<a data-act="sort" data-val="sort_weight"><i></i>推荐排序</a>
							</li>
							<li class="tb-r-time">
								<a data-act="sort" data-val="feedbackdate"><i></i>最近评价</a>
							</li>
							<li class="tb-r-heat">
								<a data-act="sort" data-val="vote_useful"><i></i>最高人气</a>
							</li>
							<li class="tb-r-rank">
								<a data-act="sort" data-val="rater_star"><i></i>最高信用</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="tb-revbd" style="">
		<ul class="tb-r-comments">
			<li tabindex="0" hidefocus="true" class="tb-r-comment">
				<div class="tb-r-buyer">
					<div class="tb-r-avatar">
						<a href="http://wow.taobao.com/u/MTAyOTIzMTE2/view/ta_taoshare_list.htm?redirect=fa" target="_blank" class="tb-action" data-act="sendclick" data-val="12.18"> <img width="40" height="40" data-act="sns" data-val="img" src="http://wwc.taobaocdn.com/avatar/getAvatar.do?userId=102923116&amp;width=40&amp;height=40&amp;type=sns"></a>
					</div>
					<div class="tb-r-nick">
						<a href="http://wow.taobao.com/u/MTAyOTIzMTE2/view/ta_taoshare_list.htm?redirect=fa" title="" target="_blank" class="tb-action" data-act="sendclick" data-val="12.17">糖僧的唐僧</a>
					</div>
					<div class="tb-r-rank">
						<a class="tb-action" data-act="sendclick" data-val="12.16" href="http://rate.taobao.com/rate.htm?user_id=102923116&amp;rater=1" title="91-151个买家信用积分，请点击查看详情" target="_blank"> <img src="http://a.tbcdn.cn/sys/common/icon/rank_s/b_red_4.gif?t=20111027"> </a>
					</div>
				</div>
				<div class="tb-r-bd">
					<div class="tb-r-body">
						<div class="tb-r-cnt">
							鞋子很好，穿着很合脚很舒服。全五分！！
						</div>
						<div class="tb-r-info">
							<span class="tb-r-date">[2012.07.20]</span>
							<span class="tb-r-sku">颜色分类:2258白灰色&nbsp;&nbsp;尺码:38</span>
							<span class="tb-r-usual">（平时穿38码）</span>
							<span class="tb-r-feel">&nbsp;&nbsp;&nbsp;&nbsp;上脚感受：合适</span>
						</div>
					</div>
					<div class="tb-r-act">
						<div class="tb-r-useful   tb-r-useful-zero">
							<div class="tb-r-msg">
								提交中...
							</div>
							<a href="#" class="tb-r-normal tb-useful-btn tb-action" title="有0人认为此评论有用" data-act="markuseful" data-val="19968655187">有用<span class="tb-r-ucount">(0)</span> </a>
						</div>
					</div>
				</div>
			</li>
			<li tabindex="0" hidefocus="true" class="tb-r-comment">
				<div class="tb-r-buyer">
					<div class="tb-r-avatar">
						<a href="http://wow.taobao.com/u/MTAxMjYxNDUw/view/ta_taoshare_list.htm?redirect=fa" target="_blank" class="tb-action" data-act="sendclick" data-val="12.18"> <img width="40" height="40" data-act="sns" data-val="img" src="http://wwc.taobaocdn.com/avatar/getAvatar.do?userId=101261450&amp;width=40&amp;height=40&amp;type=sns"></a>
					</div>
					<div class="tb-r-nick">
						<a href="http://wow.taobao.com/u/MTAxMjYxNDUw/view/ta_taoshare_list.htm?redirect=fa" title="" target="_blank" class="tb-action" data-act="sendclick" data-val="12.17">ytfcff</a>
					</div>
					<div class="tb-r-rank">
						<a class="tb-action" data-act="sendclick" data-val="12.16" href="http://rate.taobao.com/rate.htm?user_id=101261450&amp;rater=1" title="251-501个买家信用积分，请点击查看详情" target="_blank"> <img src="http://a.tbcdn.cn/sys/common/icon/rank_s/b_blue_1.gif?t=20111027"> </a>
					</div>
				</div>
				<div class="tb-r-bd">
					<div class="tb-r-body">
						<div class="tb-r-cnt">
							鞋子有点小~~
						</div>
						<div class="tb-r-info">
							<span class="tb-r-date">[2012.07.15]</span>
							<span class="tb-r-sku">颜色分类:2432黄绿色&nbsp;&nbsp;尺码:40</span>
							<span class="tb-r-usual">（平时穿40码）</span>
							<span class="tb-r-feel">&nbsp;&nbsp;&nbsp;&nbsp;上脚感受：偏小</span>
						</div>
					</div>
					<div class="tb-r-act">
						<div class="tb-r-useful   tb-r-useful-zero">
							<div class="tb-r-msg">
								提交中...
							</div>
							<a href="#" class="tb-r-normal tb-useful-btn tb-action" title="有0人认为此评论有用" data-act="markuseful" data-val="19827632895">有用<span class="tb-r-ucount">(0)</span> </a>
						</div>
					</div>
				</div>
			</li>
			<li tabindex="0" hidefocus="true" class="tb-r-comment">
				<div class="tb-r-buyer">
					<div class="tb-r-avatar">
						<img width="40" height="40" src="http://a.tbcdn.cn/app/sns/img/default/avatar-40.png">
					</div>
					<div class="tb-r-nick">
						<span>心***8(匿名)</span>
					</div>
					<div class="tb-r-rank">
						<img src="http://a.tbcdn.cn/sys/common/icon/rank_s/b_red_5.gif?t=20111027">
					</div>
				</div>
				<div class="tb-r-bd">
					<div class="tb-r-body">
						<div class="tb-r-cnt">
							我们一起买了好几双，都很满意，需要在来。
						</div>
						<div class="tb-r-info">
							<span class="tb-r-date">[2012.07.13]</span>
							<span class="tb-r-sku">颜色分类:2432黄绿色&nbsp;&nbsp;尺码:41</span>
							<span class="tb-r-usual">（平时穿41码）</span>
							<span class="tb-r-feel">&nbsp;&nbsp;&nbsp;&nbsp;上脚感受：合适</span>
						</div>
					</div>
					<div class="tb-r-act">
						<div class="tb-r-useful   tb-r-useful-zero">
							<div class="tb-r-msg">
								提交中...
							</div>
							<a href="#" class="tb-r-normal tb-useful-btn tb-action" title="有0人认为此评论有用" data-act="markuseful" data-val="19786537545">有用<span class="tb-r-ucount">(0)</span> </a>
						</div>
					</div>
				</div>
			</li>
			<li tabindex="0" hidefocus="true" class="tb-r-comment">
				<div class="tb-r-buyer">
					<div class="tb-r-avatar">
						<a href="http://wow.taobao.com/u/NzMzNzA0NzM2/view/ta_taoshare_list.htm?redirect=fa" target="_blank" class="tb-action" data-act="sendclick" data-val="12.18"> <img width="40" height="40" data-act="sns" data-val="img" src="http://wwc.taobaocdn.com/avatar/getAvatar.do?userId=733704736&amp;width=40&amp;height=40&amp;type=sns"></a>
					</div>
					<div class="tb-r-nick">
						<a href="http://wow.taobao.com/u/NzMzNzA0NzM2/view/ta_taoshare_list.htm?redirect=fa" title="xuyijiang555" target="_blank" class="tb-action" data-act="sendclick" data-val="12.17">xuyij...</a>
					</div>
					<div class="tb-r-rank">
						<a class="tb-action" data-act="sendclick" data-val="12.16" href="http://rate.taobao.com/rate.htm?user_id=733704736&amp;rater=1" title="11-41个买家信用积分，请点击查看详情" target="_blank"> <img src="http://a.tbcdn.cn/sys/common/icon/rank_s/b_red_2.gif?t=20111027"> </a>
					</div>
				</div>
				<div class="tb-r-bd">
					<div class="tb-r-body">
						<div class="tb-r-cnt">
							查了下 是 正品 很好 很喜欢
						</div>
						<div class="tb-r-info">
							<span class="tb-r-date">[2012.05.07]</span>
							<span class="tb-r-sku">颜色分类:白蓝色&nbsp;&nbsp;尺码:40</span>
							<span class="tb-r-usual">（平时穿41码）</span>
							<span class="tb-r-feel">&nbsp;&nbsp;&nbsp;&nbsp;上脚感受：合适</span>
						</div>
						<div class="tb-r-append">
							<b class="tb-r-arrow-up"></b><b class="tb-r-arrow-up tb-r-arrow-up-top"></b>
							<div class="tb-r-cnt">
								[追加评论] 鞋子穿一段时间了   还不错  网上真的买到好货了  太值了
							</div>
							<div class="tb-r-info">
								确认收货后 37 天追加
							</div>
						</div>
					</div>
					<div class="tb-r-act">
						<div class="tb-r-useful   tb-r-useful-zero">
							<div class="tb-r-msg">
								提交中...
							</div>
							<a href="#" class="tb-r-normal tb-useful-btn tb-action" title="有0人认为此评论有用" data-act="markuseful" data-val="17884247571">有用<span class="tb-r-ucount">(0)</span> </a>
						</div>
					</div>
				</div>
			</li>
		</ul>
	</div>
</div>
<?php
include "detail/footer.php";
?>