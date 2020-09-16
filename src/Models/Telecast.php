<?php


namespace Observatby\TelecastVault\Models;


class Telecast
{
    private string $title;
    private string $shortDescription;
    private string $description;
    private Leader $leader;
    private EpisodeList $episodes;
    // TODO private int $year;
    // TODO private string $time; //Время выхода в эфир
    // TODO Шапка для страницы на сайте (изображение)
    // TODO Фото для анонсов
    // TODO URL
    // TODO Трейлер (общий анонс)


    /**
     * Telecast constructor.
     * @param string $title
     * @param string $shortDescription
     * @param string $description
     * @param Leader $leader
     * @param EpisodeList $episodes
     */
    public function __construct(string $title, string $shortDescription, string $description, Leader $leader, EpisodeList $episodes)
    {
        $this->title = $title;
        $this->shortDescription = $shortDescription;
        $this->description = $description;
        $this->leader = $leader;
        $this->episodes = $episodes;
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
    public function getShortDescription(): string
    {
        return $this->shortDescription;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return Leader
     */
    public function getLeader(): Leader
    {
        return $this->leader;
    }
}
