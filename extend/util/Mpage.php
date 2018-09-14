<?php
/**
 * Created by PhpStorm.
 * User: hiliq
 * Date: 2018/5/25
 * Time: 10:17
 */

namespace Util;


use think\Paginator;

class Mpage extends Paginator
{
    public function __construct($items, $listRows, $currentPage = null, $total = null, $simple = false, array $options = [])
    {
        parent::__construct($items, $listRows, $currentPage, $total, $simple, $options);
    }

    //首页
    protected function home() {

    }
    //上一页
    protected function prev() {
        if ($this->currentPage() > 1) {
            return " <p class='prev active z'><i class='icon-prev'></i>
                       <a id='prev' href='".$this->url($this->currentPage-1)."'>上一张</a></p>";
        } else {
            return " <p class='prev active z'><i class='icon-prev'></i>
                       <a id='prev' href='#'>上一张</a></p>";
        }
    }
    //下一页
    protected function next() {
        if ($this->hasMore) {
            return " <p class='next active z'>
                       <a id='next' href='".$this->url($this->currentPage+1)."'>下一张</a>
                       <i class='icon-next'></i></p>";
        } else {
            return " <p class='next active z'><a id='next' href='#'>下一张</a><i class='icon-next'></i></p>";
        }
    }
    //尾页
    protected function last() {

    }
    //统计信息
    protected function info(){
        return "<p class='sum'><span>".$this->currentPage."</span>/<span>".$this->lastPage."</span></p>"  ;
    }
    /**
     * 页码按钮
     * @return string
     */
    protected function getLinks()
    {

    }
    /**
     * 渲染分页html
     * @return mixed
     */
    public function render()
    {
        if ($this->hasPages()) {
            if ($this->simple) {
                return sprintf(
                    '%s<div class="pagination">%s %s %s</div>',
                    $this->css(),
                    $this->prev(),
                    $this->getLinks(),
                    $this->next()
                );
            } else {
                return sprintf(
                    '%s<div class="piclist__1_252272609" id="pageNum">%s %s %s %s %s %s</div>',
                    $this->css(),
                    $this->home(),
                    $this->prev(),
                    $this->getLinks(),
                    $this->next(),
                    $this->last(),
                    $this->info()
                );
            }
        }
    }
    /**
     * 生成一个可点击的按钮
     *
     * @param  string $url
     * @param  int    $page
     * @return string
     */
    protected function getAvailablePageWrapper($url, $page)
    {
        return '<a href="' . htmlentities($url) . '" title="第"'. $page .'"页" >' . $page . '</a>';
    }
    /**
     * 生成一个禁用的按钮
     *
     * @param  string $text
     * @return string
     */
    protected function getDisabledTextWrapper($text)
    {
        return '<p class="pageEllipsis">' . $text . '</p>';
    }
    /**
     * 生成一个激活的按钮
     *
     * @param  string $text
     * @return string
     */
    protected function getActivePageWrapper($text)
    {
        return '<span>' . $text . '</span>';
    }
    /**
     * 生成省略号按钮
     *
     * @return string
     */
    protected function getDots()
    {
        return $this->getDisabledTextWrapper('...');
    }
    /**
     * 批量生成页码按钮.
     *
     * @param  array $urls
     * @return string
     */
    protected function getUrlLinks(array $urls)
    {
        $html = '';
        foreach ($urls as $page => $url) {
            $html .= $this->getPageLinkWrapper($url, $page);
        }
        return $html;
    }
    /**
     * 生成普通页码按钮
     *
     * @param  string $url
     * @param  int    $page
     * @return string
     */
    protected function getPageLinkWrapper($url, $page)
    {
        if ($page == $this->currentPage()) {
            return $this->getActivePageWrapper($page);
        }
        return $this->getAvailablePageWrapper($url, $page);
    }

    protected function css(){

    }
}