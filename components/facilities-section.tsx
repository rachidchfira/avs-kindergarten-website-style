"use client"

import Image from "next/image"
import { useLanguage } from "@/contexts/language-context"
import {
  Carousel,
  CarouselContent,
  CarouselItem,
  CarouselNext,
  CarouselPrevious,
} from "@/components/ui/carousel"

export default function FacilitiesSection() {
  const { t } = useLanguage()

  const facilities = [
    {
      id: 2,
      image: "/IMG_3062.JPG",
      altKey: "facilities.image2.alt",
    },
    {
      id: 3,
      image: "/IMG_3063.JPG",
      altKey: "facilities.image3.alt",
    },
    {
      id: 4,
      image: "/IMG_3064.JPG",
      altKey: "facilities.image4.alt",
    },
    {
      id: 5,
      image: "/IMG_3065.JPG",
      altKey: "facilities.image1.alt",
    },
    {
      id: 6,
      image: "/IMG_3066.JPG",
      altKey: "facilities.image2.alt",
    },
  ]

  return (
    <section className="py-16 bg-white">
      <div className="container mx-auto px-4">
        <h2 className="text-3xl md:text-4xl font-bold text-primary text-center mb-4">{t("facilities.title")}</h2>
        <p className="text-center text-gray-600 mb-12 max-w-3xl mx-auto">{t("facilities.subtitle")}</p>

        <div className="max-w-5xl mx-auto">
          <Carousel className="w-full">
            <CarouselContent>
              {facilities.map((facility) => (
                <CarouselItem key={facility.id} className="md:basis-1/2 lg:basis-1/2">
                  <div className="p-2">
                    <div className="relative aspect-video overflow-hidden rounded-xl shadow-lg">
                      <Image
                        src={facility.image}
                        alt={t(facility.altKey)}
                        fill
                        className="object-cover transition-transform hover:scale-105 duration-500"
                      />
                    </div>
                    <p className="text-center text-gray-600 mt-3">{t(facility.altKey)}</p>
                  </div>
                </CarouselItem>
              ))}
            </CarouselContent>
            <div className="flex justify-center mt-4">
              <CarouselPrevious className="relative static left-0 right-0 translate-y-0 mr-2" />
              <CarouselNext className="relative static left-0 right-0 translate-y-0 ml-2" />
            </div>
          </Carousel>
        </div>
      </div>
    </section>
  )
}
