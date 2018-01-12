<?php

namespace Nikunjkabariya\Faq;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model {

    protected $table = 'faqs';
    //public $timestamps  = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'slug', 'question', 'answer', 'status', 'faq_topic_id'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
    ];

    //Define a query scope called status = Active
    public function scopeActive($query) {
        return $query->where('status', 'Active');
    }

    /**
     * Get the faq topic that owns the faq
     */
    public function faqTopic() {
        return $this->belongsTo('Nikunjkabariya\Faq\FaqTopic');
    }

}
