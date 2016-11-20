USE [online_shopping]
GO

/****** Object:  Table [dbo].[store]    Script Date: 02/11/2016 10:41:23 È.Ù ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

CREATE TABLE [dbo].[store](
	[SID] [int] NOT NULL,
	[name] [nvarchar(50)] NOT NULL,
 CONSTRAINT [PK_store] PRIMARY KEY CLUSTERED 
(
	[SID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO


