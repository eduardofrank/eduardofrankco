<?php

declare(strict_types=1);

namespace CodingMs\FluidFpdf\Event;

final class DrawPdfFooterEvent
{
    /** @phpstan-ignore-next-line */
    private \FluidFpdf $fpdf;

    /**
     * @param \FluidFpdf $fpdf
     */
    /** @phpstan-ignore-next-line */
    public function __construct(\FluidFpdf $fpdf)
    {
        $this->fpdf = $fpdf;
    }

    /**
     * @return \FluidFpdf
     */
    /** @phpstan-ignore-next-line */
    public function getFpdf(): \FluidFpdf
    {
        return $this->fpdf;
    }
}
