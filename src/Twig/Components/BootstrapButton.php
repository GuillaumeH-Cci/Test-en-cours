<?php

namespace App\Twig\Components;

use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent]
final class BootstrapButton
{
    private string $_strText;
    private string $_strType = '';
    private string $_strLink;

    /**
     * Monte le composant de bouton Boostrap sur la vue HTML
     * 
     * @param string $text Texte afficher dans le bouton
     * @param string $type Type de Bouton = Dark, Light, Info, Danger, Warning, Success, Primary
     * @param string $link Lien de redirection
     * @param bool $outlined Défini le si le bouton est sans fond ou avec fond 
     */
    public function mount(string $text, string $type, string $link, bool $outlined = false): void
    {
        $this->_strText = $text;
        $this->_strLink = $link;

        if ($outlined) {
            $this->_strType = 'outline-';
        }
        
        $this->_strType = $type;
    }

    /**
     * Retourne le texte du bouton Bootstrap
     * @return string
     */
    public function getText(): string
    {
        return $this->_strText;
    }

    /**
     * Retourne le type du bouton Bootstrap
     * @return string
     */
    public function getType(): string
    {
        return $this->_strType;
    }

    /**
     * Retourne le lien du bouton Bootstrap
     * @return string
     */
    public function getLink(): string
    {
        return $this->_strLink;
    }
}
