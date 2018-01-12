<?php

namespace Nikunjkabariya\Faq;

use Illuminate\Database\Eloquent\Model;

class FaqTopic extends Model {

    protected $table = 'faq_topics';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'slug', 'topic_name', 'status'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'created_at', 'updated_at', 'deleted_at'
    ];

    /**
     * Get all faq records associated with the faq topic
     */
    public function faqs() {
        return $this->hasMany('Nikunjkabariya\Faq\Faq');
    }
    
}
