"use client"

import { useLanguage } from "@/contexts/language-context"
import Image from "next/image"

export default function ProgramsPage() {
  const { t } = useLanguage()

  return (
    <div>
      <div className="bg-primary text-white py-16">
        <div className="container mx-auto px-4 text-center">
          <h1 className="text-4xl font-bold mb-4">{t("programs.page.title")}</h1>
          <p className="text-xl">{t("programs.page.subtitle")}</p>
        </div>
      </div>

      <div className="py-16">
        <div className="container mx-auto px-4">
          <div className="mb-16">
            <div className="bg-white rounded-lg shadow-md overflow-hidden">
              <div className="md:flex">
                <div className="md:w-1/3 relative">
                  <Image
                    src="/placeholder.svg?height=300&width=400"
                    alt={t("programs.basic.title")}
                    width={400}
                    height={300}
                    className="w-full h-full object-cover"
                  />
                </div>
                <div className="md:w-2/3 p-6 md:p-8 border-l-4 border-secondary">
                  <h2 className="text-2xl font-bold text-primary mb-2">{t("programs.basic.title")}</h2>
                  <div className="flex flex-wrap gap-4 mb-4">
                    <span className="bg-gray-100 text-primary-light px-3 py-1 rounded-full text-sm">
                      {t("programs.basic.age")}
                    </span>
                    <span className="bg-gray-100 text-primary-light px-3 py-1 rounded-full text-sm">
                      {t("programs.basic.duration")}
                    </span>
                  </div>
                  <p className="text-gray-600 mb-4">{t("programs.basic.content")}</p>
                </div>
              </div>
            </div>
          </div>

          <div className="mb-16">
            <div className="bg-white rounded-lg shadow-md overflow-hidden">
              <div className="md:flex">
                <div className="md:w-1/3 relative">
                  <Image
                    src="/placeholder.svg?height=300&width=400"
                    alt={t("programs.steam.title")}
                    width={400}
                    height={300}
                    className="w-full h-full object-cover"
                  />
                </div>
                <div className="md:w-2/3 p-6 md:p-8 border-l-4 border-accent-blue">
                  <h2 className="text-2xl font-bold text-primary mb-2">{t("programs.steam.title")}</h2>
                  <div className="flex flex-wrap gap-4 mb-4">
                    <span className="bg-gray-100 text-primary-light px-3 py-1 rounded-full text-sm">
                      {t("programs.steam.age")}
                    </span>
                    <span className="bg-gray-100 text-primary-light px-3 py-1 rounded-full text-sm">
                      {t("programs.steam.duration")}
                    </span>
                  </div>
                  <p className="text-gray-600 mb-4">{t("programs.steam.content")}</p>
                </div>
              </div>
            </div>
          </div>

          <div>
            <div className="bg-white rounded-lg shadow-md overflow-hidden">
              <div className="md:flex">
                <div className="md:w-1/3 relative">
                  <Image
                    src="/placeholder.svg?height=300&width=400"
                    alt={t("programs.english.title")}
                    width={400}
                    height={300}
                    className="w-full h-full object-cover"
                  />
                </div>
                <div className="md:w-2/3 p-6 md:p-8 border-l-4 border-accent-green">
                  <h2 className="text-2xl font-bold text-primary mb-2">{t("programs.english.title")}</h2>
                  <div className="flex flex-wrap gap-4 mb-4">
                    <span className="bg-gray-100 text-primary-light px-3 py-1 rounded-full text-sm">
                      {t("programs.english.age")}
                    </span>
                    <span className="bg-gray-100 text-primary-light px-3 py-1 rounded-full text-sm">
                      {t("programs.english.duration")}
                    </span>
                  </div>
                  <p className="text-gray-600 mb-4">{t("programs.english.content")}</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  )
}
