<?php

namespace common\models;

use common\components\DiffBehavior;
use common\models\base\ActiveRecord;
use yii\base\InvalidCallException;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "article_revision".
 *
 * @property integer $article_id
 * @property integer $revision
 * @property string  $title
 * @property string  $body
 * @property integer $category_id
 * @property string  $yii_version
 * @property string  $memo
 * @property integer $updater_id
 * @property string  $updated_at
 * @property string  $tagNames
 *
 * @property User    $updater
 * @property Article $article
 */
class ArticleRevision extends ActiveRecord
{
    const SCENARIO_CREATE = 'create';

    public function behaviors()
    {
        return [
            'timestamp' => [
                'class'              => TimestampBehavior::class,
                'createdAtAttribute' => false,
            ],
            'diff'      => DiffBehavior::class,
        ];
    }


    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%article_revision}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'body', 'category_id', 'memo'], 'required'],
            [['body'], 'string'],
            [['title', 'memo'], 'string', 'max' => 255],
            [['yii_version'], 'string', 'max' => 5],
        ];
    }


    public function scenarios()
    {
        return [
            self::SCENARIO_CREATE => ['title', 'body', 'category_id', 'memo', 'yii_version']
        ];
    }

    public function beforeSave($insert)
    {
        if (!$insert) {
            throw new InvalidCallException('Updating a article Revision is not allowed!');
        }

        if ($insert && $this->revision === null) {
            $this->revision = (int)static::find()->where(['article_id' => $this->article_id])->max('revision');
            $this->revision++;
        }

        return parent::beforeSave($insert);
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'article_id'  => 'Article ID',
            'revision'    => 'Revision',
            'title'       => 'Title',
            'body'        => 'body',
            'category_id' => 'Category ID',
            'memo'        => 'Memo',
            'updater_id'  => 'Updater ID',
            'updated_at'  => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUpdater()
    {
        return $this->hasOne(User::class, ['id' => 'updater_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArticle()
    {
        return $this->hasOne(Article::class, ['id' => 'article_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(ArticleCategory::class, ['id' => 'category_id']);
    }

    public function findPrevious()
    {
        return static::find()
            ->where(['article_id' => $this->article_id])
            ->andWhere(['<', 'revision', $this->revision])
            ->orderBy(['revision' => SORT_DESC])
            ->one();
    }

    public function findNext()
    {
        return static::find()
            ->where(['article_id' => $this->article_id])
            ->andWhere(['>', 'revision', $this->revision])
            ->orderBy(['revision' => SORT_ASC])
            ->one();
    }

    public static function findLatest($article_id)
    {
        return static::find()
            ->where(['article_id' => $article_id])
            ->orderBy(['revision' => SORT_DESC])
            ->limit(1)->one();
    }

    public function isLatest()
    {
        return $this->equals(static::findLatest($this->article_id));
    }

    /**
     * @return array url to this object. Should be something to be passed to [[\yii\helpers\Url::to()]].
     */
    public function getUrl($action = null, $params = [])
    {
        $url = ['article/revision', 'id' => $this->article_id, 'r1' => $this->revision];

        return empty($params) ? $url : array_merge($url, $params);
    }

}
