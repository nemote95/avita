USE [online_shopping]
GO

/****** Object:  Table [dbo].[discount]    Script Date: 02/11/2016 10:40:57 È.Ù ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

CREATE TABLE [dbo].[discount](
	[DID] [int] NOT NULL,
	[percentage] [float] Not NULL,
 CONSTRAINT [PK_percentage] PRIMARY KEY CLUSTERED 
(
	[DID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO


