<?php

namespace App\Twig\Components;

use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent]
final class BootstrapCard
{
    private string $_strTitle;
    private string $_strImg = '';
    private string $_strLink;
    private string $_strLabel;

    /**
     * Monte le composant de bouton Boostrap sur la vue HTML
     * 
     * @param string $title - Titre dans la card
     * @param string $img - Image URI de la source de l'image
     * @param string $link - Lien de redirection URL ou URI
     * @param string $label - Texte affiché dans le bouton 
     */
    public function mount(string $title, string $img, string $link, string $label): void
    {
        $this->_strTitle = $title;
        $this->_strLink = $link;
        $this->_strImg = $img;
        $this->_strLabel = $label;
    }

    /**
     * Retourne le Titre de la card
     * @return string
     */
    public function getTitle(): string
    {
        return $this->_strTitle;
    }

    /**
     * Retourne le lien de redirection de la card
     * @return string
     */
    public function getLink(): string
    {
        return $this->_strLink;
    }

    /**
     * Retourne le lien du bouton Bootstrap
     * @return string
     */
    public function getImg(): string
    {
        return $this->_strImg;
    }

    /**
     * Retourne le lien du bouton Bootstrap
     * @return string
     */
    public function getLabel(): string
    {
        return $this->_strLabel;
    }
}
