<?php


namespace humhub\modules\content\widgets\richtext\extensions;


use yii\base\Model;

/**
 * A RichTextExtensionMatch wraps regex results of richtext extensions and provides helper functions to access
 * data of a match.
 *
 * @package humhub\modules\content\widgets\richtext\extensions
 */
abstract class RichTextExtensionMatch extends Model
{
    /**
     * @var array
     */
    public $match;

    /**
     * Returns the full match string
     * @return string
     */
    public abstract function getFull() : string;

    /**
     * Returns the text content of the extension match if supported
     * @return string
     */
    public abstract function getText() : ?string;

    /**
     * Returns the extension key
     * @return string
     */
    public abstract function getExtensionKey() : string;

    /**
     * Returns the id of this extension match, if supported
     * @return string
     */
    public abstract function getExtensionId() : ?string;

    /**
     * Returns an url of this extension match, if supported
     * @return string
     */
    public abstract function getExtensionUrl() : ?string;

    /**
     * Returns a title of this extension match if supported
     * @return string
     */
    public abstract function getTitle() : string;

    /**
     * Returns an addition of this extension match if supported
     * @return string
     */
    public abstract function getAddition() : string;

    /**
     * Returns the value of a given match index or null
     * @param $index
     * @return string|null
     */
    public function getByIndex(int $index) : ?string
    {
        return $this->match[$index] ?? null;
    }
}
