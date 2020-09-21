<?php


namespace Observatby\TelecastVault\Models;


class Telecast
{
    private string $title;
    private string $description;
    private string $text;
    private LeaderListInterface $leaders;
    private EpisodeListInterface $episodes;
    // TODO private int $year;
    // TODO private string $time; //Время выхода в эфир
    // TODO Шапка для страницы на сайте (изображение)
    // TODO Фото для анонсов
    // TODO URL
    // TODO Трейлер (общий анонс)


    /**
     * Telecast constructor.
     * @param string $title
     * @param string $description
     * @param string $text
     * @param LeaderListInterface $leaders
     * @param EpisodeListInterface $episodes
     */
    public function __construct(string $title, string $description, string $text, LeaderListInterface $leaders, EpisodeListInterface $episodes)
    {
        $this->title = $title;
        $this->description = $description;
        $this->text = $text;
        $this->leaders = $leaders;
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
     * @return LeaderListInterface
     */
    public function getLeaders(): LeaderListInterface
    {
        return $this->leaders;
    }

    /**
     * @return EpisodeListInterface
     */
    public function getEpisodes(): EpisodeListInterface
    {
        return $this->episodes;
    }

}
