<?php
include "detail/header.php";
?>
<div id="reviews" class="J_DetailSection" data-reviewapi="" data-reviewcountapi="" data-listapi="" data-commonapi=""
data-usefulapi="" style="display: block; ">
	<h4 class="hd" style="display: none; "></h4>
	<div class="tb-revhd">
		<div class="tb-r-summary J_Tb_r-summary">
			<div class="tb-r-score">
				<span>�������������</span><strong>4.9</strong><span>��</span>
			</div>
			<div class="tb-r-count-num">
				��65�δ��
			</div>
			<div class="tb-r-links">
				<a target="_blank" href="http://rate.taobao.com/user-rate-3c20748257c11324979daa8c3c403a6d.htm?spm=2013.1.1000126.5#dynamic-rate" class="r-shoprate tb-action" data-act="sendclick" data-val="12.18"><i></i>��������</a>
			</div>
			<!--�����  ������������-->
			<div class="tb-r-size clear">
				<div class="tb-r-size-des">
					<p>
						������������
					</p>
					<p class="tb-r-des-total">
						��1823������
					</p>
				</div>
				<div class="tb-r-comment-scale">
					<div class="tb-r-comment-wrapper tb-r-max-wrapper">
						<div class="J_ScaleBar">
							<div data-value="80" data-total="100"></div>
						</div>
						<span class="tb-r-comment-des">80%�����ΪЬ���׼</span>
					</div>
					<div class="tb-r-comment-wrapper tb-r-normal-wrapper">
						<div class="J_ScaleBar">
							<div data-value="10" data-total="100"></div>
						</div>
						<span class="tb-r-comment-des">10%�����ΪЬ���׼</span>
					</div>
					<div class="tb-r-comment-wrapper">
						<div class="J_ScaleBar">
							<div data-value="10" data-total="100"></div>
						</div>
						<span class="tb-r-comment-des tb-r-min-wrapper">10%�����ΪЬ���׼</span>
					</div>
				</div>
				<a id="J_SizeHelperTrigger" class="tb-r-helper-button"> �����Ƽ� </a>
			</div>
		</div>
		<div id="J_SizeHelperPanel" class="SizeHelperPanel">
			<div class="SizeHelperSizeWrapper">
				<lable>
					��ƽ������
					<select id="J_SizeHelperSize">
						<option value="0">����</option>
						<option value="31">31��</option>
						<option value="32">32��</option>
						<option value="33">33��</option>
						<option value="34">34��</option>
						<option value="35">35��</option>
						<option value="36">36��</option>
						<option value="37">37��</option>
						<option value="38">38��</option>
						<option value="39">39��</option>
						<option value="40">40��</option>
						<option value="41">41��</option>
						<option value="42">42��</option>
						<option value="43">43��</option>
						<option value="44">44��</option>
						<option value="45">45��</option>

					</select>
				</lable>
				<span class="sizeHelperTips"> ѡ�����ĳ��룬���Բ鿴�������Ƶ�TA�ĳ���ѡ�� </span>
			</div>
			<div id="J_NoSize" class="SizeHelperNoSize">
			
			</div>
			<div id="J_SizeHelperResult" class="sh-result-panel">
				<div class="sh-max-scale sh-scale">
					<span class="sh-size J_Sh-size">37��</span>
					<div class="sh-scale-wrapper">
						<div class="J_ScaleBar">
							<div data-value="80" data-total="100"></div>
						</div>
					</div>
					<span class="sh-scale-tips">80%ƽ����37�����ҹ�����37�룬����Ϊ����</span>
				</div>
				<div class="sh-normal-scale sh-scale">
					<span class="sh-size J_Sh-size">38��</span>
					<div class="sh-scale-wrapper">
						<div class="J_ScaleBar">
							<div data-value="10" data-total="100"></div>
						</div>
					</div>
					<span class="sh-scale-tips">10%ƽ����37�����ҹ�����38�룬����Ϊ����</span>
				</div>
				<div class="sh-min-scale sh-scale">
					<span class="sh-size J_Sh-size">39��</span>
					<div class="sh-scale-wrapper">
						<div class="J_ScaleBar">
							<div data-value="10" data-total="100"></div>
						</div>
					</div>
					<span class="sh-scale-tips">10%ƽ����37�����ҹ�����39�룬����Ϊ����</span>
				</div>
			</div>
		</div>
		<div class="tb-r-box">
			<div class="tb-r-filter">
				<ul class="tb-taglist">
					<li class="tb-current">
						<input id="reviews-t-1" type="radio" data-act="type" data-val="" checked="checked" name="reviews-type" class="tb-action">
						<label for="reviews-t-1"><span class="r-c-title">ȫ��</span></label>
					</li>
					<li class="tb-long">
						<input id="reviews-t-2" type="radio" data-act="type" data-val="1" name="reviews-type" class="tb-action">
						<label for="reviews-t-2"><span class="r-c-title">����</span><span data-count="24" data-count-f="34" class="tb-r-count">(24)</span></label>
					</li>
					<li class="tb-long">
						<input id="reviews-t-3" type="radio" data-act="type" data-val="0" name="reviews-type" class="tb-action">
						<label for="reviews-t-3"><span class="r-c-title">����</span><span data-count="1" class="tb-r-count">(1)</span></label>
					</li>
					<li class="tb-long">
						<input id="reviews-t-4" type="radio" data-act="type" data-val="-1" name="reviews-type" class="tb-action">
						<label for="reviews-t-4"><span class="r-c-title">����</span><span data-count="0" class="tb-r-count">(0)</span></label>
					</li>
					<li class="tb-long">
						<input id="reviews-t-5" type="radio" data-act="type" data-val="2" name="reviews-type" class="tb-action">
						<label for="reviews-t-5"><span class="r-c-title">׷��</span><span data-count="1" class="tb-r-count">(1)</span></label>
					</li>
				</ul>
				<ul class="tb-r-acts">
					<li>
						<input id="review-cb-hascnt" data-act="hascontent" checked="checked" type="checkbox">
						<label for="review-cb-hascnt">�����ݵ�����</label>
					</li>
					<li class="tb-r-sort">
						<span z-index="0" class="tb-current">�Ƽ�����</span><i class="tb-r-hot"></i>
						<ul>
							<li class="tb-r-default">
								<a data-act="sort" data-val="sort_weight"><i></i>�Ƽ�����</a>
							</li>
							<li class="tb-r-time">
								<a data-act="sort" data-val="feedbackdate"><i></i>�������</a>
							</li>
							<li class="tb-r-heat">
								<a data-act="sort" data-val="vote_useful"><i></i>�������</a>
							</li>
							<li class="tb-r-rank">
								<a data-act="sort" data-val="rater_star"><i></i>�������</a>
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
						<a href="http://wow.taobao.com/u/MTAyOTIzMTE2/view/ta_taoshare_list.htm?redirect=fa" title="" target="_blank" class="tb-action" data-act="sendclick" data-val="12.17">��ɮ����ɮ</a>
					</div>
					<div class="tb-r-rank">
						<a class="tb-action" data-act="sendclick" data-val="12.16" href="http://rate.taobao.com/rate.htm?user_id=102923116&amp;rater=1" title="91-151��������û��֣������鿴����" target="_blank"> <img src="http://a.tbcdn.cn/sys/common/icon/rank_s/b_red_4.gif?t=20111027"> </a>
					</div>
				</div>
				<div class="tb-r-bd">
					<div class="tb-r-body">
						<div class="tb-r-cnt">
							Ь�Ӻܺã����źܺϽź������ȫ��֣���
						</div>
						<div class="tb-r-info">
							<span class="tb-r-date">[2012.07.20]</span>
							<span class="tb-r-sku">��ɫ����:2258�׻�ɫ&nbsp;&nbsp;����:38</span>
							<span class="tb-r-usual">��ƽʱ��38�룩</span>
							<span class="tb-r-feel">&nbsp;&nbsp;&nbsp;&nbsp;�ϽŸ��ܣ�����</span>
						</div>
					</div>
					<div class="tb-r-act">
						<div class="tb-r-useful   tb-r-useful-zero">
							<div class="tb-r-msg">
								�ύ��...
							</div>
							<a href="#" class="tb-r-normal tb-useful-btn tb-action" title="��0����Ϊ����������" data-act="markuseful" data-val="19968655187">����<span class="tb-r-ucount">(0)</span> </a>
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
						<a class="tb-action" data-act="sendclick" data-val="12.16" href="http://rate.taobao.com/rate.htm?user_id=101261450&amp;rater=1" title="251-501��������û��֣������鿴����" target="_blank"> <img src="http://a.tbcdn.cn/sys/common/icon/rank_s/b_blue_1.gif?t=20111027"> </a>
					</div>
				</div>
				<div class="tb-r-bd">
					<div class="tb-r-body">
						<div class="tb-r-cnt">
							Ь���е�С~~
						</div>
						<div class="tb-r-info">
							<span class="tb-r-date">[2012.07.15]</span>
							<span class="tb-r-sku">��ɫ����:2432����ɫ&nbsp;&nbsp;����:40</span>
							<span class="tb-r-usual">��ƽʱ��40�룩</span>
							<span class="tb-r-feel">&nbsp;&nbsp;&nbsp;&nbsp;�ϽŸ��ܣ�ƫС</span>
						</div>
					</div>
					<div class="tb-r-act">
						<div class="tb-r-useful   tb-r-useful-zero">
							<div class="tb-r-msg">
								�ύ��...
							</div>
							<a href="#" class="tb-r-normal tb-useful-btn tb-action" title="��0����Ϊ����������" data-act="markuseful" data-val="19827632895">����<span class="tb-r-ucount">(0)</span> </a>
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
						<span>��***8(����)</span>
					</div>
					<div class="tb-r-rank">
						<img src="http://a.tbcdn.cn/sys/common/icon/rank_s/b_red_5.gif?t=20111027">
					</div>
				</div>
				<div class="tb-r-bd">
					<div class="tb-r-body">
						<div class="tb-r-cnt">
							����һ�����˺ü�˫���������⣬��Ҫ������
						</div>
						<div class="tb-r-info">
							<span class="tb-r-date">[2012.07.13]</span>
							<span class="tb-r-sku">��ɫ����:2432����ɫ&nbsp;&nbsp;����:41</span>
							<span class="tb-r-usual">��ƽʱ��41�룩</span>
							<span class="tb-r-feel">&nbsp;&nbsp;&nbsp;&nbsp;�ϽŸ��ܣ�����</span>
						</div>
					</div>
					<div class="tb-r-act">
						<div class="tb-r-useful   tb-r-useful-zero">
							<div class="tb-r-msg">
								�ύ��...
							</div>
							<a href="#" class="tb-r-normal tb-useful-btn tb-action" title="��0����Ϊ����������" data-act="markuseful" data-val="19786537545">����<span class="tb-r-ucount">(0)</span> </a>
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
						<a class="tb-action" data-act="sendclick" data-val="12.16" href="http://rate.taobao.com/rate.htm?user_id=733704736&amp;rater=1" title="11-41��������û��֣������鿴����" target="_blank"> <img src="http://a.tbcdn.cn/sys/common/icon/rank_s/b_red_2.gif?t=20111027"> </a>
					</div>
				</div>
				<div class="tb-r-bd">
					<div class="tb-r-body">
						<div class="tb-r-cnt">
							������ �� ��Ʒ �ܺ� ��ϲ��
						</div>
						<div class="tb-r-info">
							<span class="tb-r-date">[2012.05.07]</span>
							<span class="tb-r-sku">��ɫ����:����ɫ&nbsp;&nbsp;����:40</span>
							<span class="tb-r-usual">��ƽʱ��41�룩</span>
							<span class="tb-r-feel">&nbsp;&nbsp;&nbsp;&nbsp;�ϽŸ��ܣ�����</span>
						</div>
						<div class="tb-r-append">
							<b class="tb-r-arrow-up"></b><b class="tb-r-arrow-up tb-r-arrow-up-top"></b>
							<div class="tb-r-cnt">
								[׷������] Ь�Ӵ�һ��ʱ����   ������  ��������򵽺û���  ֵ̫��
							</div>
							<div class="tb-r-info">
								ȷ���ջ��� 37 ��׷��
							</div>
						</div>
					</div>
					<div class="tb-r-act">
						<div class="tb-r-useful   tb-r-useful-zero">
							<div class="tb-r-msg">
								�ύ��...
							</div>
							<a href="#" class="tb-r-normal tb-useful-btn tb-action" title="��0����Ϊ����������" data-act="markuseful" data-val="17884247571">����<span class="tb-r-ucount">(0)</span> </a>
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