<?php


namespace Observatby\TelecastVault\Models;


class Episode
{
    private string $title;
    private string $description;
    private string $text;
    private string $ageRestriction;
    private Video $video;
    private TagList $tagList;
    // TODO private Photo $photo;
    // TODO private string $serialNumber;
    // TODO Принадлежность к программе (из каталога)
    // TODO private \DateTimeImmutable $date;


    /**
     * Episode constructor.
     * @param string $title
     * @param string $description
     * @param string $text
     * @param string $ageRestriction
     * @param Video $video
     * @param TagList $tagList
     */
    public function __construct(string $title, string $description, string $text, string $ageRestriction, Video $video, TagList $tagList)
    {
        $this->title = $title;
        $this->description = $description;
        $this->text = $text;
        $this->ageRestriction = $ageRestriction;
        $this->video = $video;
        $this->tagList = $tagList;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @return string
     */
    public function getAgeRestriction(): string
    {
        return $this->ageRestriction;
    }

    /**
     * @return Video
     */
    public function getVideo(): Video
    {
        return $this->video;
    }

}
